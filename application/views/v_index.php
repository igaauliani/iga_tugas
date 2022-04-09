<section>
    <h1><?php echo $judul ?> </h1>
    <p align='justify'> Pada pengertian Codeigneter di atas tadi di jelaskan bahwa Codeigneter menggunakan
        metode MVC.apa itu MVC? kita juga harus mengetahui apa itu MVC sebelum masuk  dan lebih jauh dalam 
        belajar  Codeigneter.
    </p>
        <p>
            MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga kompen yaitu
            model, view dan controller.
        </p>
        <ol type="a">
            <li>Model</li>
    <p align="justify"> Model adalah kelas yang merepresantikan atau memodelkan type data yang akan di gunakan oleh aplikasi.
        Model juga dapat didefisikan sebagai penanganan yang berhubungan dengan pengolah atau manipulasi database.
        Seperti misalnya mengambil data dati database,mengiput dan pengolah database lainnya.
        Semua intruksi  atau fungsi yang berhubung dengan pengolahan database di letakan di dalam model.
        Sebagai contoh ,jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran,maka dapat memodelkan objek lingkaran
        sebagai kelas model.
    </p>
    <p align="justify">sebagai catatan,semua model harus di simpan di dalam< folder application/models</p>
            <li>View</li>
    <p align ="justify">
        View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser)
        Tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan
        web designer dalam melakukan pengembangan tampilan halaman webiste
    </p>
            <li>Controller</li>
    <p align="justify">
        Controllern merupakan kumpulkan intruksi aksi yang menghubungkan model dan view,jadi user tidak akan berhubungan
        dengan model secara langsung,intinya data yang tersimpan di databsae(model)di ambil oleh controller dan kemudian
        controller pula yang menampilakan nya di view.jadi controller lah yang mengolah intruksi.
    </p>
    <p align="justify">
        Dari penjelasan tentang model view dan controller di atas dapat di simpulkan bahwa controller sebagai penghubung
        view dan model.Misalnya pada aplikasi yang menampilakan data dengan menggunakan metode MVC,controller memanggil intruksi
        pada model yang mengambil data dari databsae,kemudian controller yang meneruskan pada view untuk di tampilkan.
        Jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara MVC ini karena
        web designer atau  front-end developer tidak perlu lagi berhubungan dengan controller,dia hanya 
        perlu berhubungan dengan view untuk mendesign tampilan, karena back-end yang,menangani bagian controller
        dan modelnya.jadi pembagian tugas pun menjasi mudah dan pengembangan aplikasi dapat di lakukan
        dengan cepat dan terstruktur.
    </p>
</section>