Game Store adalah aplikasi web sederhana untuk menampilkan daftar game beserta cover, genre, dan harga. Aplikasi ini dibuat menggunakan PHP Native dengan konsep modular dan routing menggunakan .htaccess (single entry point). Aplikasi memiliki fitur CRUD (admin), filter pencarian, pagination, serta sistem login dengan role admin dan user.

# Fitur Utama
✅ Routing App menggunakan .htaccess (single entry point pada public/index.php) <br>
✅ Login menggunakan Session <br>
✅ Role Based Access <br>
- Admin: CRUD Game
- User: hanya melihat daftar game
  ✅ CRUD Game (Admin)
- Create (Tambah Game)
- Read (Tampil daftar Game)
- Update (Edit Game)
- Delete (Hapus Game)
  ✅ Filter Pencarian berdasarkan judul game
  ✅ Pagination otomatis per 6 data
  ✅ Responsive Design menggunakan Bootstrap 5 (mobile first)

# Teknologi yang digunakan
- PHP Native (OOP sederhana)
- MySQL (phpMyAdmin)
- Bootstrap 5
- Apache (XAMPP)
- Session untuk autentikasi

# Struktur Folder Project
```
game_store/
├── app/
│   ├── config/
│   │   └── database.php
│   ├── controllers/
│   │   ├── AuthController.php
│   │   └── GameController.php
│   ├── models/
│   │   └── Game.php
│   └── views/
│       ├── auth/
│       │   └── login.php
│       ├── game/
│       │   ├── index.php
│       │   ├── create.php
│       │   └── edit.php
│       └── layout/
│           ├── header.php
│           └── footer.php
└── public/
    ├── index.php
    ├── .htaccess
    └── assets/
        ├── css/
        │   └── style.css
        └── img/
```

# Cara instalasi (Menjalankan Aplikasi)
1. Copy folder project ke:
```
C:\xampp\htdocs\game_store
```
2. Jalankan **Apache** dan **MySql** di XAMPP.
3. Buka phpMyAdmin lalu buat database:
```
game_store
```
4. Import/Run SQL tabel `games` dan `users`.
5. Akses aplikasi melalui:
```
http://localhost/game_store/public/
```

# Akun demo Login
| Role  | Username | Password |
| ----- | -------- | -------- |
| Admin | admin    | 123      |
| User  | user     | 123      |

# URL Routing Penting
- Home / List Game: <br>
  `http://localhost/game_store/public/`
- Login: <br>
  `http://localhost/game_store/public/index.php?page=login`

# Catatan Implementasi Role
Akses CRUD dibatasi dengan role admin menggunakan pengecekan session pada controller (adminOnly). Dengan demikian user biasa tidak dapat mengakses URL CRUD walaupun mencoba mengakses link secara langsung.

# Author
* Nama: Fathan Atallah Rasya Nugraha
* NIM: 312410425
* Kelas: TI.24.A3

Link YouTube : https://youtu.be/RYOct2aWQV8
