## Expected

![expected](./expected.png

## Hasil
![Hasil](./img.jpg)

# Tes Simple App Debugging
## Setelah melakukan clone repository, saya mencoba untuk start aplikasi dengan npm start namun hasilnya error (menggunakan visual studio code). 
## Lalu solusi yang dilakukan adalah melakukan nmp install ulang
## setelah selesei, lalu saya coba lagi dengan npm start dan aplikasi berhasil muncul pada chrome
## Lalu yang kedua adalah memunculkan "Hai Samsul Arifin" dengan cara manambahkan "Samsul Arifin" pada code "const [name, setName] = useState("Samsul Arifin");"
## Yang Ketiga adalah tombol Sign in with github jika di klik akan mengarah pada page not found 404, lalu saya mengganti code dengan 
## const popup = (this.popup = PopupWindow.open("github-oauth-authorize", `https://github.com/login?${search}`
## yang hasilnya jika tombol sign in ditekan akan masuk ke halaman login github.

