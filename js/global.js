// document.addEventListener("DOMContentLoaded", function () {
//     const plusButton = document.querySelector(".fa-plus");
//     const minusButton = document.querySelector(".fa-minus");
//     const numberStok = document.querySelector(".quantity p");
//     const subtotal = document.querySelector(".total h3");

//     let stok = 1;
//     let hargaBarang = 60000; // Harga per barang

//     // Fungsi untuk mengupdate subtotal
//     function updateSubtotal() {
//         const total = stok * hargaBarang;
//         subtotal.textContent = `IDR ${total.toLocaleString()}`;
//     }

//     // Event listener untuk tombol plus
//     plusButton.addEventListener("click", function () {
//         stok++;
//         numberStok.textContent = stok;
//         updateSubtotal();
//     });

//     // Event listener untuk tombol minus
//     minusButton.addEventListener("click", function () {
//         if (stok > 1) {
//             stok--;
//             numberStok.textContent = stok;
//             updateSubtotal();
//         }
//     });
// });