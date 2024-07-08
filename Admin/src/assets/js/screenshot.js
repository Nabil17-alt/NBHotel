const screenshotArea = document.getElementById("screenshotArea");
const btnDownload = document.getElementById("btnDownload");

// Tambahkan event listener untuk klik pada tombol Download
btnDownload.addEventListener("click", function () {
  // Buat canvas untuk menampung screenshot
  const canvas = document.createElement("canvas");
  const context = canvas.getContext("2d");

  // Tentukan ukuran canvas sesuai dengan screenshotArea
  canvas.width = screenshotArea.offsetWidth;
  canvas.height = screenshotArea.offsetHeight;

  // Gambar screenshotArea ke dalam canvas
  context.drawImage(screenshotArea, 0, 0, canvas.width, canvas.height);

  // Menggunakan toDataURL untuk menghasilkan gambar dalam format base64
  const imageURI = canvas.toDataURL("image/png");

  // Buat link untuk download
  const a = document.createElement("a");
  a.href = imageURI;
  a.download = "screenshot.png";

  // Tambahkan link ke dalam dokumen dan klik secara otomatis
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
});
