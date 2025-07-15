document.addEventListener("DOMContentLoaded", () => {
  const form   = document.getElementById("formPesan");
  const output = document.getElementById("output");

  form.addEventListener("submit", async (e) => {
    // --- validasi & cegah reload ---
    e.preventDefault();
    const nama  = document.getElementById("nama").value.trim();
    const pesan = document.getElementById("pesan").value.trim();

    if (!nama || !pesan) {
      alert("Nama dan Pesan wajib diisi!");
      return;
    }
    if (nama.length < 3) {
      alert("Nama minimal 3 karakter.");
      return;
    }

    // --- kirim diam‑diam ke proses.php ---
    try {
      await fetch("proses.php", {
        method : "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body   : new URLSearchParams({ nama, pesan })
      });
    } catch (err) {
      console.warn("Gagal kirim ke PHP (server offline?):", err);
    }

    // --- tampilkan hasil di halaman ---
    output.innerHTML = `
      <div class="output-box">
        <h3>✅ Pesan Diterima</h3>
        <p><strong>Nama:</strong> ${nama}</p>
        <p><strong>Pesan:</strong> ${pesan}</p>
        <button class="btn-kembali" onclick="resetForm()">⬅ Kembali ke Form</button>
      </div>
    `;
    form.style.display = "none";
  });
});

function resetForm() {
  const form = document.getElementById("formPesan");
  document.getElementById("output").innerHTML = "";
  form.reset();
  form.style.display = "block";
}
