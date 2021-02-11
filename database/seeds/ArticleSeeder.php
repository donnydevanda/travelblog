<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Articles')->insert([
            [
                'users_id' => 3,
                'categories_id' => 1,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'Akhirnya saya mencoba mengajak teman saya yang lain. Hasil akhirnya ialah beberapa dari mereka mau. Tapi harus menunggu waktu yang free.
                Untuk hari senin kami pending dulu naik gunungnya. Menjadi minggu depannya lagi. Tapi harus benar-benar keputusan yang final.
                Skip ke minggu depannya. Teman saya tetiba ada yang tidak bisa saat H-1. Tapi saya tetap ngeyel kalau mendakinya harus dilaksanakan di hari selasa (karena hari
                senin batal, waktu itu saya harus kuliah pagi) dan berangkatnya kudu dilaksanakan saat senin malam.
                Karena ada tiga orang yang udah fix, tapi animo mulai berkurang karena ada yang batal (karena yang batal biasanya akan mempengaruhi ke yang lain. Ya tahu sendiri
                lah penyebab salah satu dari rencana yang berakhir ke wacana ialah hal semacam itu ). Untuk meningkatkan animo yang mulai turun, saya harus mengajak satu orang lagi.
                Saya ajak secara dadakan teman saya kala itu. Dan untungnya dia mengiyakan. Padahal biasanya dia lebih mementingkan permainan PUBG atau DOTA dibanding hal rekreasi semacam ini.
                Saya tetiba harus prepare segala hal di H-1. Saya langsung riset dengan bertanya ke teman-teman saya yang pernah memiliki pengalaman dalam mendaki gunung. Terutama Gunung Andong.
                Saya tanya segala hal termasuk persiapan, medannya bagaimana dan berapa durasi yang harus ditempuh ke basecamp dari Jogja hingga mendaki sampai puncak.
                Setelah mendapatkan informasi yang cukup, akhirnya saya langsung mengeksekusi dengan mempersiapkan segala hal yang berkaitan pendakian Gunung Andong ini.
                Dari belanja sendiri bahan-bahan keperluan konsumsi, penyewaan alat-alat pendakian seperti headlamp hingga itinary saya persiapkan sendiri. Jadi ketika pendakian,
                teman-teman yang ikut mendaki cuman tinggal ikutin rencana saya.
                Sebelum pendakian malam itu, saya berencana hendak tidur sore hingga terbangun jam 10 malam. Namun saya malahterlalu deg-degan hingga tidak bisa tidur. Karena itu
                ialah pendakian gunung pertama yang saya akan lakukan.
                Jadi saya terjaga hingga saatnya keberangkatan. Saya menjemput teman saya kemudian kami berangkat tepat sesuai kesepakatan yaitu jam 11 malam.
                Kami berangkat dari Jogja ke Magelang melewati jalan raya. Banyak sekali truk angkut dengan bermacam isi kontainer dari pasir, bebatuan, kayu hingga kendaraan roda dua maupun empat.
                Semakin mendekati tujuan, semakin dingin suhu yang harus kami rasakan. Hingga mendekati basecamp-nya, kami beberapa kali singgah sebentar karena tangan kami benar-benar
                membeku. Baru kali ini saya kangen kalimantan terutama dengan suhu panasnya kala itu.
                Tiba di basecamp, kami langsung masuk ke suatu ruangan yang memang diperuntukkan pendaki yang hendak muncak. Kami di sana makan dengan bekal yang kami persiapkan. Tidak lupa juga membeli air panas yang kami masukkan ke termos masing-masing. Harganya sekitar Rp 6.000,00. Untuk termos seukuran punya saya (sekitar 2 liter jika dibandingkan dengan air mineral).
                Teman saya tidur sejenak sekitar 30 menit. Sedangkan saya tidak bisa. Karena suhunya terlalu dingin. Membuat mata saya terjaga sekali. Yang ada saya sakit perut. Mungkin karena perut saya tidak cocok dengan milo yang saya konsumsi (hal ini sudah saya buktikan keesokan harinya dengan cara meminum milo lagi. Sepertinya harus 3 in 1. Huft). Salah satu teman saya juga belum bisa tidur dan memilih untuk menyalakan sebatang rokok karena dingin yang membuat dia terpaksa kembali merokok setelah 1 tahun berhenti.
                Waktu telah menunjukkan jam 2 pagi. Salah satu alarm dari hape teman saya berbunyi. Akhirnya setelah saya bangunkan mereka, kami bersiap untuk mendaki.
                Setelah mempersiapkan segala hal termasuk memakai headlamp di kepala kami masing-masing, kami langsung bergegas. Tak ada kelompok lain yang menemani. Kami benar-benar
                sendiri kala itu. Kami mengikuti rute dengan hanya bermodal sebuah kertas berisi peta kecil cara menuju puncak Gunung Andong.
                Tebing demi tebing kami naiki. Mulai terasa semakin berat ketika bengek teman saya mulai kumat. Namun kami saling menyoraki agar terus tetap naik. Tiba-tiba saya mulai
                sakit perut lagi. Sakit perutnya lebih ke penyakit maag dibandingkan ingin buang air besar. Jadi ketika naik saat itu, saya seringkali ingin muntah-muntah.',
                'image' => 'images/mount-1.jpg',
            ],
            [
                'users_id' => 3,
                'categories_id' => 2,
                'title' => 'Pantai Situbondo',
                'description' => 'Pantai Pasir Putih yang terletak di Kabupaten Situbondo ini memiliki panorama yang menakjubkan. Topografi pantai ini termasuk unik karena bentuknya melengkung ke
                 arah laut lepas. Pantai ini memiliki air yang jernih dan bentangan pasir putih yang bersih. Di pinggir pantai, terdapat hutan yang membuat suasana di sekitar pantai ini begitu asri dan sejuk.
                 Barisan pohon cemara, kelapa dan juga pohon jati siap menyapa kamu yang berlibur di pantai ini. Selain itu, di dalam hutan ini ada banyak satwa liar yang hidup di dalamnya. Misalnya saja
                 kera hitam yang sering terlihat di pepohonan maupun jalan masuk pantai ini. Ada juga berbagai burung yang terdengan berkicau dari dalam hutan yang menambah keeksotikan pantai ini.
                 Selain itu, kamu juga bsia menyewa perahu layar yang menjadi ciri khas Pantai Pasir Putih Situbondo ini untuk berlayar ke tengah laut dan menikmati keindahan pantai ini dari sudut yang ebrbeda. Karena
                 air laut di pantai ini yang jernih, kamu bisa menikmati keindahan bawah laut pantai ini dari atas perahu lho! Biaya untuk menyewa kapal ini bervariasi, biasanya berkisar Rp 75.000 — Rp 100.000. Di sore
                 hari, jangan lewatkan kesempatan untuk menyaksikan sunset yang begitu cantik dari pantai ini.',
                'image' => 'images/beach-1.jpg',
            ],
            [
                'users_id' => 3,
                'categories_id' => 3,
                'title' => 'Singapur dan Malaysia',
                'description' => 'Pertama kali liburan sendirian ke luar negeri, 2 negara ini bisa dicoba. Apalagi kalau bukan Singapura dan Malaysia. Simak kisahnya!
                Ini adalah perjalanan pertama saya ke luar negeri, perjalanan pertama saya naik pesawat, dan sendirian. Dengan hanya membawa tas ransel yang isinya didominasi oleh baju dan
                beberapa makanan untuk kebutuhan saya selama 4 hari backpacker ke dua negara yaitu Singapura dan Malaysia.
                Buat kalian yang ragu untuk melakukan perjalanan ke luar negeri, Singapura dan Malaysia adalah opsi terbaik untuk kalian yang ingin berpetualang. Selain dekat, perbedaan budaya
                juga tidak terlalu jauh dari Indonesia, dan bahasa yang digunakan untuk kedua negara juga mudah untuk dipahami.
                Jangan khawatir jika Bahasa Inggris kalian terbatas, di Singapura sendiri petugas imigrasi dan pelayan resto akan mengerti bahasa Indonesia atau Melayu karena orang Indonesia
                sendiri banyak yang melakukan perjalanan ke sini.
                Hari pertama saya melakukan perjalanan melalui Singapura terlebih dahulu. Untuk pembelian tiket pesawat yang lebih mudah, aman dan tentunya harga bersahabat kamu bisa pesan di
                tiket.com karena di tiket.com sering menawarkan diskon potongan harga yang dijamin bikin ketagihan untuk travelling.
                Untuk pembelian tiket pesawat usahakan jangan mendadak, karena harga yang ditawarkan bisa lebih mahal kecuali kalian menggunakan promo ya itu tak masalah. Tapi uantuk yang low
                budget kalian bisa pesan 3 bulan sebelum keberangkatan, karena bisa lebih murah.
                Tiket pesawat + asuransi Rp 360.000. Jadi saya mengambil perjalanan malam dari Jakarta Soekarno Hatta ke Changi Airport. Penerbangan pukul 10.00 WIB dengan lama penerbangan 1 jam 50 menit.
                Karena perbedaan waktu 1 jam lebih cepat di Singapura, jadi saya datang di Singapura pukul 00:50 atau jam 1 dini hari. karena gaya liburan saya backpacker, untuk memesan tiket
                dengan kedatangan di jam 1 dini hari rasanya sayang jika harus memesan hostel.
                Meminimalisir mengeluaran, jadi saya putuskan untuk tidur di Bandara Changi. Jangan khawatir, karena Bandara Changi memberikan fasilitas yang cukup nyaman untuk kita yang sedang
                transit lama jadi bisa kita manfaatkan fasilitas yang di sediakan seperti sofa, kursi pijat, bahkan kamu bisa explore bandara karena di dalamnya terdapat taman yang berbeda
                di setiap terminalnya, seperti taman kupu-kupu, kaktus dan lainnya.',
                'image' => 'images/city-1.jpg',
            ],
            [
                'users_id' => 4,
                'categories_id' => 1,
                'title' => 'Menuju Puncak Semeru',
                'description' => 'Lalu bagaimana dengan saya? Saya untuk pertama kalinya pada 23 Juni hingga 26 Juni yang lalu mendaki gunung. Motivasi sebenarnya dari pendakian agak
                nyeleneh ini adalah saya ingin mencari tempat untuk menyendiri dan sedikit lari dari permasalahan yang saya hadapi. Bahkan sempat terbersit untuk melakukan tindakan nekad di
                atas sana. Tapi saya berusaha meluruskan niat bahwa pendakian saya yang pertama ini akan menjadi pelajaran penting yang bisa saya ambil untuk bekal kehidupan. Dan akhirnya bisa
                 pulang dengan selamat tanpa ada berita tragedi.
                Pelajaran apa yang saya inginkan? Saya ingin merasakan bagaimana bertahan hidup di situasi yang ekstrim. Cuaca yang tidak menentu, berusaha mandiri tanpa bantuan orang lain,
                 memahami situasi, mengambil keputusan secara cepat dan juga bagaimana menjadi bagian dari sebuah tim untuk bertahan hidup dan tetap mampu mencapai tujuan.
                Tapi tentu alasan itu kemudian memunculkan pertanyaan baru, kenapa baru sekarang? Diusia yang mungkin tidak lagi muda. Apalagi tim yang dipilih adalah tim yang sama sekali belum
                saya kenal (saya mengikuti open trip yang mayoritas pesertanya berusia 20an awal). Jawabannya tentu saja, kapan lagi kalau bukan sekarang.
                Bagi saya, usia hanyalah angka sebab segalanya bagi saya bisa dipelajari dan ditekuni. Usia tua tidak ingin menghalangi saya dari batasan-batasan yang bisa saya raih. Pun usia
                yang saya miliki untuk mendaki gunung pertama kali masihlah realistis karena masih ada orang lain yang lebih senior dari saya yang memutuskan untuk mendaki gunung pertama kali di usia senja.
                Jawaban tentang usia pun terjawab, kemudian pertanyaan selanjutnya adalah mengapa Gunung Semeru? Gunung tertinggi di Pulau Jawa dan bukan gunung-gunung lain yang lebih rendah.
                Sejujurnya tentang Gunung Semeru saya sudah mengetahuinya sejak masa SMA, yang ternyata gunung ini meski sebagai gunung tertinggi di Pulau Jawa, tingkat kesulitannya relatif
                mudah. Saya mengetahui ini sejak saat saya masih aktif di pecinta alam Misa Bhawana Cita di SMA Negeri 1 Malang.
                Ada beberapa alasan menurut saya mengapa Gunung Semeru berkategori mudah. Pertama, gunung ini sangat populer. Hampir semua pendaki di jawa berusaha untuk bisa mendaki gunung
                tertinggi. Tentu saja gunung itu adalah Gunung Semeru, sehingga banyaknya pendaki membuat berbagai pengalaman pendakian di Gunung Semeru menjadi pelajaran bagi banyak orang.
                Bahkan di kalangan pecinta alam, Gunung Semeru sepertinya tetap tidak dimasukkan dalam hitungan ketinggian yang harus dicapai oleh anggotanya karena dianggap gunung wisata.
                Kedua, Gunung Semeru berada di taman nasional. Karena Gunung Semeru berada di taman nasional, pemeliharaan infrastruktur dan jalur-jalurnya sangat diperhatikan oleh pengelola.
                Sebab jika lapangan dan pendaki tidak dikendalikan bisa-bisa taman nasional akan rusak. Statusnya sebagai tamna nasional pun juga memberikan keuntungan bagi aspek keselamatan
                karena semakin banyak tenaga search and rescue (SAR) maupun first responder lain seperti polisi hutan yang siap siaga.
                Ketiga, Gunung Semeru memiliki bentuk gunung yang relatif landai. Bentuknya yang berupa perisai membuat pendakian Gunung Semeru hanya memiliki resiko dari aspek cuaca dan
                kewaspadaan pendaki. Sebab jalurnya tidak memiliki jurang yang ekstrim ataupun membutuhkan alat khusus untuk didaki.
                Alasan-alasan di atas bukan berarti Gunung Semeru tanpa resiko. Bahkan gunung ini memiliki resiko yang tidak kalah serius dibanding gunung lainnya. Resiko yang ditimbulkan oleh
                gunung tinggi antara lain adalah tentang hipotermia, kelelahan, dan juga resiko keramaian yang bisa menyebabkan longsor batu saat upaya memuncak. Semua itu adalah resiko yang
                harus diperhatikan jika ingin selamat mendaki Gunung Semeru.
                Dengan memperhatikan beberapa hal itu saya kemudian berani untuk mengambil peluang open trip yang muncul dalam grup Facebook Komunitas Pendaki Gunung yang saya ikuti.
                Keputusan untuk mengikuti perjalanan ini pun sebenarnya spontan karena murni keinginan untuk bisa mendaki gunung untuk pertama kalinya. Tim pun terbentuk dan rencana pendakian telah ditentukan.',
                'image' => 'images/mount-2.jpg',
            ],
            [
                'users_id' => 4,
                'categories_id' => 2,
                'title' => 'Liburan ke Gili Trawangan',
                'description' => 'Perkenalkan, nama saya adalah Firman Rhamadhan biasa di panggil Firman. Aku lahir di Bandung, 18 November 2001 dan merupakan anak kedua dari satu bersaudara.
                Aku dilahirkan di keluarga yang sederhana, sedangkan kakakku lahir pada 1 Agustus 1995, 6 tahun lebih tua dariku. Kakakku bekerja di perusahaan yang cukup terkenal yaitu
                elzatta, ya bagi kaum hawa nama itu sudah tidak asing.
                Dahulu aku tidak belajar terlebih dahulu di TK maupun Paud seperti anak-anak pada umumnya, tetapi aku langsung ke jenjang Sekolah Dasar, setelah 6 tahun bersekolah di SD
                Negeri Jaya Mekar, aku melanjutkan pendidikan ke jenjang SMP Negeri 2 Padalarang yang pada akhirnya sekarang aku bersekolah di SMA Negeri 1 Padalarang.
                Waktu demi waktu berlalu hingga Berawal ketika aku masih duduk di bangku kelas 9 SMP, setelah aku sampai dirumah selepas pulang sekolah pada waktu itu ibuku memberi tahu
                kepadaku bahwa beliau akan pergi ke pantai bersama dengan tetangga yang lain yang sama sama bekerja di rumah perusahaan tetangga ibuku, seraya berkata :
                "Firman, mamah mau pergi ke pantai sama temen temen mamah sekomplek, firman mau ikut atau gmna?" Ucap ibuku,
                Karena aku belum pernah ke pantai sama sekali lantas dengan spontan aku menjawab,, Ya, firman pingin ikut."
                Waktu itu aku pergi ke pantai bersama ibuku dan teman ibuku yang lainnya,  Kita berangkat pada pukul 12 malam menggunakan bus yang sudah di sewa, kita berangkat pada Jumat
                 malam karena pada waktu itu sekolah SMP ku libur pada hari sabtunya atau bisa dibilang sistem di sekolah SMP ku memakai sistem 5 hari program sekolah.
                Selama di perjalanan aku tidak tidur sama sekali, karena aku orangnya susah tidur jika tidak merasa nyaman. Aku hanya melihat ke kiri dan ke kanan begitu juga memperhatikan
                jalan di depan, karena waktu itu aku berangkatnya pada malam hari jadi yang kulihat tidak sepenuhnya terlihat, hanya pohon dan jalan.
                Tak terasa waktu sudah menunjukkan jam 5 : 30 pagi padahal aku belum sama sekali tidur dari pemberangkatan awal. Aku mulai tertidur ketika bis berhenti sejenak di SPBU untuk
                mengisi bahan bakar, hingga akhirnya aku tertidur hingga sampai di tempat tujuan.
                Setelah perjalanan yang cukup panjang, akhirnya kita sampai di tujuan pada pukul 10 pagi yang jika dihitung memakan waktu kurang lebih 10 jam.
                Disana aku beristirahat terlebih dahulu karena rasa kantuk susah untuk dilawan, karena selama perjalanan aku hanya tertidur di waktu pagi saja dan itu hanya sebentar.
                Setelah terbangun dari tidur, aku makan dahulu kemudian pergi menuju pantai yang tidak jauh dari tempat penginapan. Karena pada saat itu aku baru pertama kali, jadi tidak
                tahu bahwa air laut itu berbeda dengan air biasanya, lantas aku langsung menceburkan diri dan berenang, ternyata airnya membuat mataku perih dan rasanya asin seperti garam. ',
                'image' => 'images/beach-2.jpg',
            ],
            [
                'users_id' => 4,
                'categories_id' => 3,
                'title' => 'Melihat Negri Belanda',
                'description' => 'Jadi sewaktu pertama kalinya jalan-jalan ke Eropa, saya berangkat sendirian dari Indonesia ke Belanda dengan rute: Manado—Jakarta—Kuala Lumpur—Amsterdam dengan maskapai
                KLM. Di bandara Schiphol, Amsterdam, saya akan bertemu teman baik saya, C, seorang cowok Taiwan yang juga menempuh perjalanan panjang sendirian dari Taipei menuju Amsterdam dengan salah
                satu maskapai China. Syukurlah jam kedatangan pesawat kami hampir bersamaan, dan Puji Tuhan, di Hari-H pesawat kami tidak mengalami keterlambatan yang berarti.
                Setelah belasan jam berada di langit, akhirnya kami bertemu di Schiphol—tentunya setelah saya berputar-putar kebingungan mencari lokasi meeting point yang ditentukan oleh teman saya.
                Waktu itu tanggal 31 Desember 2016 pagi hari, hampir di puncaknya musim dingin. Bahkan didalam bandara pun saya merasa kedinginan…hhh… (nasib orang tropis yang tidak tahan dingin).
                Namun saat melihat ke sekeliling bandara sayapun mendadak tersadar, saya ada di Belanda… wow… finally! Dalam hati saya berseru-seru kegirangan, Welcome to Europe! Welcome to Amsterdam!
                Meskipun jari-jari tangan dan kaki kedinginan 😀
                Belanda menjadi negara pertama yang kami kunjungi dalam petualangan kami menjelajah beberapa negara di wilayah Uni Eropa
                Rute perjalanan kami:
                Belanda (Amsterdam) – Belgia (Brussels) – Luxembourg (Luxembourg) – Prancis (Paris) – Jerman (Cologne, Wurzburg & Munich) – Ceko (Praha) – Austria (Salzburg & Hallstatt) – Italia
                (Venezia & Roma) – Vatikan
                Di blog ini saya akan membagikan beberapa lokasi wisata yang kami kunjungi—yang mungkin bisa menjadi inspirasi bagi kalian yang berencana jalan-jalan ke Eropa, dan cerita-cerita
                 menarik yang terjadi selama 20 hari di Eropa.',
                'image' => 'images/city-2.jpg',
            ],
            [
                'users_id' => 5,
                'categories_id' => 1,
                'title' => 'Mendaki Pangarango',
                'description' => 'ni pengalaman pertamaku mendaku Gunung Pangrango via Cibodas. Saya sendiri adalah pegawai swasta dan belum pernah mendaki sebelumnya.
                Sebagai seorang suami, ayah dan pekerja kantoran berumur 38 tahun, mungkin sudah terlambat jika melakukan ini sebagai seorang pemula. Beberapa kali muncul ajakan-ajakan untuk mendaki,
                 tapi selalu gagal, seperti tidak ada niatan sedikitpun.
                Seiring waktu berjalan, niat itu muncul sedikit demi sedikit ketika saya sering menonton kanal pendakian di salah satu media sosial, baik yang bersifat dokumenter ataupun mistis.
                Sampai akhirnya tibalah saya dengan kedua teman saya di basecamp Gunung Pangrango via cibodas. Sebenarnya gagasan pendakian ini berasal dari teman-teman saya yang berbeda, akhirnya
                 gagasan itupun hanya berakhir semu.
                Sebelumnya, kami mendaki dengan melalui pendaftaran secara online. Ya! Dimulailah pendakian kami.
                Di Pos I, setelah cek kesehatan dan mendapatkan pengarahan berupa hal yang boleh atau tidak boleh dilakukan dan dibawa, dan lain-lain. Perjalanan dimulai, kami sangat bersemangat
                 dengan satu tujuan puncak. Cuaca di saat itupun sangat mendukung langit berawan dan sejuk.
                Setelah melewati Pos II, tibalah di jalur pendakian yang sesungguhnya, tangga berbatu tiada henti. Sambil tidak hanya membawa diri untuk mendaki, tapi juga menggendong tas carrier 60L bermuatan penuh.
                Shelter (tempat berteduh) demi shelter dan di antaranya, seringkali saya meminta break beberapa menit. Semakin saya sadari kalau tubuh ini sudah tidak muda lagi.
                Saya adalah seorang yang berolahraga secara rutin, tapi sayang kebanyakan yang saya latih hanyalah bagian upper body saja. Semua jerih payah dan keringat hasil latihan saya seakan
                 tidak ada gunanya saat pendakian kemarin.
                Banyak kali kami berpapasan dengan pendaki-pendaki lainnya yang mengarah turun sambil menyemangati kami, lumayan memberikan semangat, sambil berkata dalam hati kapankah penderitaan
                ini berakhir.
                Satu hal yang paling saya rasakan di proses pendakian ini adalah status, usia, jenis kelamin, jabatan semuanya sudah dilepaskan sejak dari basecamp. Kita semua adalah orang-orang
                 yang bertujuan untuk menang dalam proses menuju puncak, dan saling bekerjasama sebagai satu tim.
                Singkat cerita, tibalah kita di Pos Kandang Batu setelah menempuh waktu perjalanan kurang lebih 7 jam mendaki. Ya cukup lambat, maklum rata-rata kami bertiga adalah pemula, hanya
                 satu teman kami sebagai guide dan leader yang pernah punya pengalaman mendaki, itu pun juga baru satu kali.
                Kita putuskan untuk bangun tenda di pos ini, karena saat itu sudah pukul 2 siang dan kita sangat Lelah juga kelaparan.
                Singkat cerita malampun tiba, pukul 6 sore terasa seperti pukul 8 malam, dan cuaca saat itu tidak hanya hujan deras tapi juga begitu dingin, sampai-sampai airpun masuk ke dalam
                 tenda kami karena ada kesalahan teknis dalam pembangunan tenda dan kurangnya perlengkapan, maklum pemula.
                Semakin malam temperatur berubah menjadi semakin dingin, kita bisa rasakan dinginnya yang menembus beberapa helai pakaian dan sleeping bag tebal kami, mungkin sekitar 6-8',
                'image' => 'images/mount-3.jpg',
            ],
            [
                'users_id' => 5,
                'categories_id' => 2,
                'title' => 'Pantai Pasir Putih',
                'description' => 'Minggu kemarin, tanggal 16 Oktober 2011 aku berlibur bersama teman-teman kantorku yang dulu ke Anyer. Tempat janjiannya adalah di halte busway Pasar Genjing,
                 Pramuka. berhubung rumah saya di Depok dan rombongan berangkat pukul 07.00 WIB jadi saya ke tempat janjian membawa motor yang nantinya saya titipkan di kostan teman yang berada di dekat Pasar Genjing.
                Setelah kami (aku, Embak Retty, Embak Peni beserta anaknya, Lia, Tri, Yanti, Embak Titi, dan sang supir) berkumpul semua berangkatlah kami menuju Anyer lewat Tol Tangerang. Tiba di
                 lokasi Pasir Putih Anyer sekitar pukul 10.30 WIB karena kami sempat ke Tangerang dahulu untuk menjemput Tri dan Yanti di sana.
                Sesampainya di Anyer kami menurunkan semua barang-barang dan langsung menuju pinggir pantai. Ternyata tikar yang kami bawa tidak berguna karena di sana ada penyewaan pondok untuk
                berteduh berupa bale-bale yang disewa sudah plus dengan alas tikarnya.
                Tak sabar karena pantai yang sudah memanggil-manggil aku pun langsung meluncur ke pantai, menyentuh, dan bersalaman dengan air laut. Kami berfoto-foto narsis di setiap sudut
                 pantai, sampai rela jalan jauh untuk mencapai bebatuan dan berfoto-foto. Maklum yang pergi adalah kami kaum hawa yang eksis akan dunia fotografi (lebih tepatnya model untuk di foto).
                  Setelah puas foto-foto kami langsung mengganti pakaian di ruang ganti yang sudah disiapkan di pinggiran pantai, sekali masuk Rp2.000,00 per orang.
                Setelah berganti pakaian kami sudah siap untuk basah-basahan bermain air laut. Dan, yang tak terlewatkan oleh kami adalah banana boat. Setelah nego harga dengan orang-orang
                yang menyewakan banana boat akhirnya disepakati sekali main (3 putaran) Rp150.000,00. Aku yang gak bisa berenang awalnya ragu tapi penasaran untuk mencobanya, karena terpengaruh oleh
                 rayuan Embak Retty akhirnya aku pun memberanikan diri ikut main banana boat bersama mereka. Jadilah Lia duduk paling depan, kemudian Embak Retty, Yanti, aku, Tri, dan Embak Titi naik
                  banana boat. Aku request kepada nakhoda banana boat untuk tidak di jatuhkan ke laut karena aku takut tenggelam. Tapi, apalah daya ternyata dijatuhkan juga, alhasil aku panik banyak air
                   yang masuk ke hidung dan kupingku, rasanya asin, dan aku merasakan seperti akan tenggelam. Namun, eketika aku mencoba menapakkan kaki ke dasar, ternyata aku bisa berdiri. Ternyata
                    abang banana boatnya baik, menjatuhkan kami di dekat pinggiran pantainya saja, untung nggak di tengah pantai bisa-bisa pingsan aku di sana. Sampai di daratan aku langsung mencari
                    air minum untuk menghilangkan pengeng di telinga karena kemasukan air laut yang asin.
                Ternyata seru juga main banana boat dengan catatan nggak pakai dijatuhin meskipun kata orang-orang nggak seru kalau nggak pakai jatuh. Sayangnya nggak ada yang mengabadikan
                momen saat menaiki banana boat. Setelah main banana aku mengubur diri di pasir putih, hanya setengah badan saja yang terkubur tapi seru lho sebagian tubuhku hilang.
                Karena matahari sudah di ubun-ubun dan perut keroncongan kami pun berteduh dan makan siang dengan masakan mi ayam dan bakso sesuai selera. Murah lho harganya hanya Rp6.000,00
                seporsi, padahal aku kira bisa sampai Rp10.000,00-an.',
                'image' => 'images/beach-3.jpg',
            ],
            [
                'users_id' => 5,
                'categories_id' => 3,
                'title' => 'Mengunjungi Negri Paman Sam',
                'description' => 'Liburan kali ini kita putuskan untuk berlibur ke negeri Paman Sam. Perjalanan ini kami lakukan selama tiga minggu dimulai pada tanggal 22 Mei- 13 Juni
                2016 dengan rute “West coast”. Cuaca pada saat itu pas banget menurut kita, tidak terlalu panas dan tidak terlalu dingin alias musim semi. Musim semi sendiri diperkirakan
                dimulai pada pertengahan Maret dan berakhir pada pertengahan Juni. Cocok banget rasanya kabur dari Kuwait yang pada saat itu sudah summer dengan suhu rata-rata 40-50c.
                Anyway, kita memilih west coast route (Los Angeles-Long Beach-Pasadena-Las Vegas-New York) dengan pertimbangan pengen ngedapetin first impression yang baik sebagai tourist.
                 Karena kita tahu kalau NYC itu kota yang sibuk dan terkenal sebagai kota yang tak pernah tidur sangkin ramai, padat, dsb. Sedangkan LA masih bisa dikategorikan sebagai kota
                 yang sedikit lebih tenang dan fresh.  Jadi ceritanya perjalanan ini kita mulai dari kota yang tenang dan adem berlanjut ke kota tengah gurun dan terakhir ke NYC. Kami akan
                 ceritakan secara detail kisah perjalanan kami selama tiga minggu ini, semoga bisa menambah informasi bagi siapa saja yang pengen liburan ke Amerika Serikat.',
                'image' => 'images/city-3.jpg',
            ],
        ]);
    }
}
