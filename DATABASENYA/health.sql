-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 12:27 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `coment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `name`, `coment`) VALUES
(1, 'Dinda Sutra Kinan', 'Hallo dok..saya mau nanya apasih yang terjadi di otak jika seseorang merasakan jatuh cinta?trimakasih?'),
(2, 'Pevita Pearce Kinan', 'Hallo dok.Saya mau tanya, beberapa hari ini tenggorokan saya serasa berlendir dan gak enak, awalnya cuma tenggorokan saja, tapi sekarang sudah mulai merasa sesak Nafas Ringan..Selain itu, dada saya kadang terasa sakit, kadang berkeringat dimalam hari, saya punya riwayat TBC.Pertanyaannya, apakah itu gejala corona atau penyakit lainnya? Saya khawatir soalnya, terimakasih.'),
(4, 'Niki Minaj', ' Slmt sore dok maaf mau tanya tadi malam sy mimisan tadi pagi sy mimisan lagi tapi tdk sampai menetes dan sy tdk merasakan sakit sama sekali tapi cuaca di tempat sy sangat panas kira\" menurut doktet sy sakit apa ya dok terimakasih'),
(5, 'Sarah Snyder', ' Hi dok, saya ingin bertanya. Apa benar jika sudah tertular corona maka pasien yang sembuh bisa terkena kanker paru-paru? Ada juga yang bilang kalau sudah pernah kena, nanti fungsi parunya jadi berkurang. Apa benar, dok? Mohon infonya ya dok.');

-- --------------------------------------------------------

--
-- Table structure for table `kamus`
--

CREATE TABLE `kamus` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `photo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamus`
--

INSERT INTO `kamus` (`id`, `judul`, `isi`, `photo`) VALUES
(3, 'Dislokasi', 'Dislokasi adalah kondisi di mana tulang bergeser dari sendi atau posisi yang seharusnya. Contohnya, bagian atas tulang lengan Anda seharusnya menempel pada sendi bahu Anda. Ketika tulang bergeser atau keluar dari sendi tersebut, Anda mengalami dislokasi bahu.', 'dislokasi.jpg'),
(5, 'Pusing', 'merasa pusing adalah keluhan umum di antara orang dewasa yang lebih tua. Meskipun biasanya tidak disebabkan oleh sesuatu yang mengancam jiwa, tetapi kamu tetap perlu berhati-hati. Jika kamu disergap rasa pusing, direkomendasikan untuk segera minum air putih atau jus jeruk, kemudian berbaring. Pusing identik dengan kondisi di mana kepala terasa nyeri.', 'pusing.jpg'),
(6, 'Diabetes melitus', 'Diabetes melitus (DM) didefinisikan sebagai suatu penyakit atau gangguan metabolisme kronis dengan multi etiologi yang ditandai dengan tingginya kadar gula darah disertai dengan gangguan metabolisme karbohidrat, lipid, dan protein sebagai akibat insufisiensi fungsi insulin. Insufisiensi fungsi insulin dapat disebabkan oleh gangguan atau defisiensi produksi insulin oleh sel-sel beta Langerhans kelenjar pankreas, atau disebabkan oleh kurang responsifnya sel-sel tubuh terhadap insulin', 'diabetesmelitus.jpg'),
(7, 'Masuk Angin', 'Masuk angin menjadi “penyakit” yang paling popular di Indonesia. Namun istilah masuk angin ini hanya popular di Indonesia karena dunia internasional tak mengenal istilah ini. Masuk angin merujuk pada kondisi “tidak enak badan” yang terjadi saat sistem kekebalan tubuh melemah ditandai dengan badan demam, sakit kepala, bahu terasa kaku dan keras, hidung tersumbat (pilek), perut kembung, mual, radang tenggorok (sakit buat menelan), kerap bersendawa, hingga batuk. Para ahli kesehatan beranggapan bahwa penyakit ini adalah gejala datangnya flu.', 'masuk angin.jpg'),
(8, 'Demam', 'Demam umumnya terjadi sebagai reaksi dari sistem imun dalam melawan infeksi virus, bakteri, jamur, atau parasit penyebab penyakit. Beberapa penyakit yang sering menyebabkan demam adalah flu, radang tenggorokan, dan infeksi saluran kemih. Selain penyakit, ada beberapa kondisi yang dapat menyebabkan terjadinya demam, yaitu paparan cuaca dan suhu panas yang berlebihan, siklus menstruasi, reaksi setelah pemberian imunisasi pada anak, serta efek samping obat-obat tertentu.', 'Waspadai-Demam-Naik-Turun-Petanda-Gejala-3-Penyakit-Ini.png'),
(15, 'COVID-19', 'Covid-19 adalah penyakit yang ditimbulkan oleh infeksi virus corona baruatau SARS-CoV-2 yang berasal dari keluarga coronaVirus Corona atau Coronavirus merupakan sebuah jenis virus yang memiliki penampilan permukaan penuh dengan jarum runcing yang menyerang saluran pernapasan. Adapun yang dapat menjangkit manusia antara lain MERS, SARS, dan juga SARS-CoV-2 yang mewabah saat ini.', 'covid-19.jpg'),
(16, 'Kanker', 'Definisi dari penyakit kanker yaitu penyakit tidak menular yang disebabkan oleh sel atau jaringan tidak normal yang dapat berkembang sehingga mengganggu metabolisme tumbuh dan berkembang dengan cepat. Jika jaringan tersebut sudah berkembang pesat maka beberapa penyakit komplikasi dari penyakit ini juga bisa menyebar dengan cepat pula. Penyebaran kanker ini melalui jalan pembuluh darah atau pembuluh getah bening. Semua unsur yang membentuk organ punya potensi untuk menyebarkan kanker. Diawali dari masa tumor, sel kanker bisa berkembang sangat ganas.  ', 'kanker.jpg'),
(17, 'Tumor', 'Pengertian Tumor\r\nTumor selama ini dianggap sebagai penyakit yang mematikan bagi mayoritas orang. Namun, anggapan tersebut tidak sepenuhnya benar, karena tumor sendiri terbagi menjadi dua jenis, yaitu tumor jinak dan juga tumor ganas atau umumnya kita kenal dengan kanker.', 'tumor.JPG'),
(18, 'Anemia', 'Penyakit anemia merupakan kondisi ketika jumlah sel darah merah lebih rendah dari jumlah normal. Selain itu, anemia terjadi ketika hemoglobin di dalam sel-sel darah merah tidak cukup, seperti protein kaya zat besi yang memberikan warna merah darah. Protein ini membantu sel-sel darah merah membawa oksigen dari paru-paru ke seluruh tubuh.\r\n\r\nOleh karena itu, tubuh yang tidak mendapatkan cukup darah yang kaya oksigen akan mengalami anemia. Akibatnya, seseorang mungkin akan merasa lelah atau lemah. Selain itu, gejala lain mungkin muncul adalah sesak napas, pusing, atau sakit kepala.', 'anemia.jpg'),
(19, 'Bronkitis', 'Bronkitis adalah sebutan untuk infeksi yang menyerang saluran pernapasan utama dari paru-paru atau yang disebut dengan bronkus. Akibat penyakit ini, maka akan terjadi peradangan atau inflamasi yang kemudian akan menimbulkan gejala yang mengganggu pernapasan.\r\n\r\nBronkitis akut disebabkan oleh infeksi paru-paru yang pada banyak kasus penyebabnya adalah virus. Iritasi dan peradangan menyebabkan bronkus menghasilkan lendir lebih banyak. Bronkus merupakan saluran udara dalam sistem pernapasan yang bertugas membawa udara dari dan ke paru-paru.', 'bronkitis.jpg'),
(20, 'Cacar Air', 'Cacar air disebabkan oleh virus, yang mudah menular melalui percikan ludah, serta kontak langsung dengan cairan yang berasal dari ruam. Penyakit ini lebih rentan menyerang anak-anak di bawah usia 12 tahun. Pengobatan cacar air bertujuan untuk mengurangi keparahan gejala yang dialami oleh pasien, dengan atau tanpa bantuan obat.', 'cacar.jpg'),
(21, 'DBD (Demam Berdarah Dengue)', 'DBD atau demam berdarah dengue adalah penyakit yang disebabkan oleh salah satu dari empat virus dengue. Demam berdarah merupakan penyakit yang mudah menular. Sarana penularan demam berdarah sendiri berasal dari gigitan nyamuk Aedes aegypti dan Aedes albocpictus.\r\n\r\nPenyakit demam berdarah disebabkan oleh virus dengue yang ditularkan oleh nyamuk Aedes aegypti dan Aedes albopictus. Kedua nyamuk dapat menggigit di pagi hari sampai sore menjelang petang. Penularan terjadi saat nyamuk menggigit dan menghisap darah seseorang yang sudah terinfeksi virus dengue, ketika nyamuk tersebut mengigit orang lain, maka virus akan tersebar.', 'dbd.jpg'),
(22, 'Ebola', 'Ebola adalah suatu penyakit yang disebabkan oleh virus dan dapat berakibat fatal jika tidak segera ditangani. Penyakit ini pertama kali ditemukan di Afrika pada 1976. Virus Ebola sendiri awalnya hidup pada tubuh hewan, kemudian menjangkiti manusia melalui darah hewan yang sudah terkontaminasi virus.\r\n\r\nPenyakit ini disebabkan oleh virus Ebola yang awalnya ditemukan pada hewan, seperti monyet, simpanse, dan primata lainnya. Virus Ebola disebarkan melalui kontak langsung darah atau cairan tubuh pengidap seperti urine, tinja, air liur, serta air mani, dengan hidung, mata, mulut, atau luka terbuka pada orang sehat.', 'ebola.jpg'),
(23, 'Faringitis', 'Faringitis adalah peradangan pada selaput lendir yang melapisi bagian belakang tenggorokan atau faring. Peradangan ini bisa menyebabkan ketidaknyamanan, kekeringan, dan kesulitan menelan. Faringitis dapat disebabkan akibat infeksi maupun non-infeksi. Faringitis adalah kondisi umum yang jarang berkembang menjadi penyakit serius. Peradangan ini biasanya bisa sembuh dengan sendirinya dalam waktu kurang lebih seminggu.\r\n\r\nBeberapa faktor yang bisa menyebabkan seseorang terkena faringitis adalah udara yang dingin, konsumsi alkohol yang berlebihan, turunnya daya tahan tubuh, dan konsumsi makanan yang kurang gizi.', 'faringitis.jpg'),
(24, 'Gagal Ginjal', 'Gagal ginjal adalah salah satu penyakit ginjal yang cukup ditakuti. Kondisi ini terjadi ketika ginjal mengalami kerusakan dan tidak dapat berfungsi dengan baik. Gagal ginjal biasanya merupakan tahap akhir dari penyakit ginjal, di mana kerusakan pada ginjal sudah cukup berat atau berlangsung lama, sehingga muncul gangguan fungsi yang permanen.\r\n\r\nSecara umum, gagal ginjal disebabkan oleh 3 hal, yaitu kerusakan langsung pada ginjal, kurangnya pasokan darah ke ginjal, dan penyumbatan pada ginjal atau saluran kemih, sehingga urine tidak bisa dikeluarkan dari tubuh dan termaasuk pada penyakit organ dalam.', 'gagalginjal.jpg'),
(25, 'Hepatitis', 'Hepatitis adalah istilah umum penyakit yang merujuk pada peradangan yang terjadi di hati. Hepatitis umumnya disebabkan oleh infeksi virus, meskipun juga dapat disebabkan oleh kondisi lain. Beberapa penyebab hepatitis selain infeksi virus adalah kebiasaan minum alkohol, penyakit autoimun, serta zat racun atau obat-obatan tertentu.\r\n\r\nHepatitis yang terjadi dapat bersifat akut maupun kronis. Seseorang yang mengalami hepatitis akut dapat memberikan beragam manifestasi dan perjalanan penyakit. Mulai dari tidak bergejala, bergejala dan sembuh sendiri, menjadi kronis, dan yang paling berbahaya adalah berkembang menjadi gagal hati. Bila berkembang menjadi hepatitis kronis, dapat menyebabkan sirosis dan kanker hati (hepatocellular carcinoma) dalam kurun waktu tahunan.', 'hepatitis.jpg'),
(26, 'Influenza', 'Banyak orang mengira flu sama dengan batuk pilek biasa (common cold). Walaupun gejalanya mirip, kedua kondisi ini disebabkan oleh jenis virus yang berbeda. Gejala flu lebih parah dan menyerang secara mendadak, sedangkan gejala batuk pilek biasa cenderung ringan dan muncul secara bertahap. Flu merupakan penyakit yang mudah menular ke orang lain, terutama pada 3-4 hari pertama setelah penderita terinfeksi. Bahkan pada beberapa kasus, penderita flu dapat menularkan penyakitnya sebelum gejala muncul.\r\n\r\nFlu ringan dapat diatasi dengan banyak beristirahat, mengonsumsi makanan sehat yang mengandung vitamin C dan minum banyak cairan. Namun bila gejalanya berat, sebaiknya Anda segera memeriksakan diri ke dokter agar dapat diberikan obat untuk mempercepat kesembuhan dan mencegah komplikasi.', 'influenza.jpg'),
(27, 'Jantung Koroner', 'Penyakit jantung koroner adalah kondisi ketika pembuluh darah utama yang memberi pasokan darah, oksigen, dan nutrisi untuk jantung menjadi rusak. Biasanya, kondisi ini disebabkan oleh plak kolesterol dan proses peradangan.\r\n\r\nnyakit ini merupakan penyebab nomor satu dari serangan jantung dimana pada beberapa orang dapat menyebabkan kematian, penyempitan pada pembuluh darah koroner membuat darah tidak dapat diantar menuju otot jantung dengan semestinya. Arteri yang sempit, karena timbunan plak yang mengeras akan membuat suplai oksigen ke jantung terhambat, akibatnya jantung mengalami kontraksi mendadak yang memicu serangan jantung pada organ dalam.', 'jantung.jpg'),
(28, 'Kanker Tulang', 'Kanker tulang adalah jenis kanker yang menyerang tulang. Kondisi ini dapat dialami oleh anak-anak hingga orang dewasa. Kanker tulang dapat menyerang tulang mana pun di dalam tubuh,namun umumnya terjadi di tungkai, lengan, dan panggul.\r\n\r\nKanker tulang tergolong kondisi yang jarang terjadi, \r\nhanya sebesar 1% dari seluruh penderita kanker. \r\nSedangkan kanker tulang pada anak hanya menempati sekitar 3% dari seluruh kasus penyakit kanker pada anak. \r\nTumor yang terbentuk pada tulang pun lebih banyak yang jinak dibandingkan yang ganas\r\n', 'kanker.jpg'),
(29, 'Liver', 'Liver atau hati merupakan organ terbesar kedua dalam tubuh manusia dengan ukuran kira-kira sebesar bola rugby dan memiliki dua bagian (lobus) kanan dan kiri. \r\nLiver terletak di perut kanan atas tepat di bawah tulang rusuk dan memiliki beberapa fungsi di dalam tubuh.\r\n\r\nSebetulnya, hati merupakan organ yang dapat melakukan regenerasi dengan cepat untuk mengganti sel-selnya yang rusak.\r\nAkan tetapi, jika sel-sel yang rusak cukup banyak, maka kerja hati untuk tubuh dapat terganggu. \r\nBiasanya terjadi penurunan fungsi hati ketika kerusakan sel-sel hati mencapai 75%.\r\n', 'liver.jpg'),
(30, 'Maag', 'Sakit maag atau dispepsia adalah gejala penyakit berupa rasa nyeri dan panas pada lambung yang terjadi akibat sejumlah kondisi. \r\nDi antaranya adalah luka terbuka pada lapisan dalam lambung (tukak lambung), infeksi bakteri Helicobacter pylori, efek samping penggunaan obat antiinflamasi nonsteroid (OAINS), dan stres.\r\n\r\nSakit maag merupakan salah satu penyakit yang umum terjadi di Indonesia. \r\nMenurut data dari beberapa pusat endoskopi di Indonesia, ada sekitar 7000 kasus sakit maag yang dilakukan endoskopi, dan lebih dari 85% merupakan dispepsia fungsional.\r\nDispepsia fungsional merupakan kondisi sakit maag yang tidak diketahui penyebabnya.\r\n', 'maag.jpg'),
(31, 'Nyeri Sendi', 'Nyeri sendi adalah rasa sakit pada bagian tubuh yang menghubungkan tulang dengan tulang, menyebabkan pergerakan dan kualitas hidup penderitanya menjadi terganggu. \r\nNyeri sendi bisa berlangsung singkat atau lama. Tingkat keparahan rasa sakitnya juga bervariasi, mulai dari ringan, menengah, hingga berat.\r\n\r\nSegera konsultasikan kepada dokter apabila mengalami kondisi-kondisi berupa sendi bengkak secara tiba-tiba, sendi tidak dapat digerakkan, perubahan bentuk pada sendi, dan rasa sakit pada sendi yang tidak tertahankan.\r\n', 'nyeri.jpg'),
(32, 'Osteoporosis', 'Osteoporosis adalah kondisi berkurangnya kepadatan tulang.Hal ini menyebabkan tulang menjadi keropos dan mudah patah.Osteoporosis jarang menimbulkan gejala dan biasanya baru diketahui ketika penderitanya jatuh atau mengalami cedera yang menyebabkan patah tulang.\r\n\r\nOsteoporosis bisa dialami oleh siapa saja, termasuk anak-anak dan orang dewasa. Namun, kondisi ini lebih sering terjadi pada wanita yang telah memasuki masa menopause.Hal ini disebabkan oleh berkurangnya kadar estrogen yang berperan penting dalam menjaga kepadatan tulang.\r\n', 'osteo.jpg'),
(33, 'Parkinson', 'Penyakit Parkinson adalah penyakit saraf yang memburuk secara bertahap dan memengaruhi bagian otak yang berfungsi mengoordinasikan gerakan tubuh. Akibatnya, penderita kesulitan mengatur gerakan tubuhnya, termasuk saat berbicara, berjalan, dan menulis.\r\n\r\nGejala awal parkinson biasanya cenderung ringan dan tidak disadari oleh penderita. Terdapat 3 gejala utama yang dialami penderita Penyakit Parkinson yaitu tremor, gerak tumbuh melambat dan kaku otot.\r\n', 'parkinson.jpg'),
(34, 'Radang', 'Radang amandel atau tonsilitis adalah kondisi di mana amandel mengalami peradangan atau inflamasi. Meski umumnya dialami oleh anak-anak usia 3 sampai 7 tahun, radang amandel juga dapat terjadi pada orang dewasa.\r\n\r\nAmandel atau tonsil merupakan dua kelenjar kecil yang ada di tenggorokan. Organ ini berfungsi untuk mencegah infeksi, khususnya pada anak-anak. Seiring bertambahnya usia, sistem kekebalan tubuh semakin kuat sehingga fungsi amandel mulai tergantikan. Ketika fungsinya tergantikan, amandel secara perlahan akan menyusut.\r\n', 'radang.jpg'),
(35, 'Stroke', 'Stroke adalah kondisi yang terjadi ketika pasokan darah ke otak terganggu atau berkurang akibat penyumbatan (stroke iskemik) atau pecahnya pembuluh darah (stroke hemoragik). Tanpa darah, otak tidak akan mendapatkan asupan oksigen dan nutrisi, sehingga sel-sel pada sebagian area otak akan mati.\r\n\r\nKetika sebagian area otak mati, bagian tubuh yang dikendalikan oleh area otak yang rusak tidak dapat berfungsi dengan baik. Stroke adalah keadaan darurat medis karena sel otak dapat mati hanya dalam hitungan menit. Penanganan yang cepat dapat meminimalkan kerusakan otak dan kemungkinan munculnya komplikasi.\r\n', 'stroke.jpg'),
(36, 'Tifus', 'Tifus (tipes) atau demam tifoid adalah penyakit yang disebabkan oleh infeksi bakteri Salmonella typhii. Tifus dapat menular dengan cepat, umumnya melalui konsumsi makanan atau minuman yang sudah terkontaminasi tinja yang mengandung bakteri Salmonella typhii. \r\nPada kasus yang jarang terjadi, penularan tifus dapat terjadi karena terpapar urine yang sudah terinfeksi bakteri Salmonella typhii.\r\n\r\nHampir 100.000 penduduk Indonesia terjangkit penyakit tifus tiap tahunnya. Oleh sebab itu, penyakit tifus dinyatakan sebagai penyakit endemik dan masalah kesehatan serius di dalam negeri.\r\n', 'tifus.jpg'),
(37, 'Usus Buntu', 'Penyakit usus buntu adalah peradangan yang terjadi pada usus buntu atau apendiks. Usus buntu merupakan organ berbentuk kantong kecil dan tipis, berukuran sepanjang 5 hingga 10 cm yang terhubung pada usus besar.\r\n \r\nSaat menderita radang usus buntu, penderita dapat merasa nyeri di perut kanan bagian bawah. Jika dibiarkan, infeksi dapat menjadi serius dan menyebabkan usus buntuh pecah, sehingga menimbukan keluhan rasa nyeri hebat hingga membahayakan nyawa penderitanya.\r\n', 'usu.jpg'),
(38, 'Vertigo', 'Vertigo adalah kondisi yang membuat penderitanya mengalami pusing, sampai merasa dirinya atau sekelilingnya berputar.Penderita dapat mengalami vertigo dengan tingkat keparahan yang berbeda-beda.\r\n\r\nPada dasarnya, vertigo perlu mendapatkan penanganan dengan segera. Jika tidak, kondisi yang ada dapat memburuk dan membahayakan penderitanya. Dianjurkan untuk segera membawa penderita ke dokter jika terdapat tanda atau gejala\r\n', 'vertigo.jpg'),
(39, 'Wasir', 'Wasir atau hemoroid adalah pembengkakan atau pembesaran dari pembuluh darah di usus besar bagian akhir (rektum), serta dubur atau anus. Wasir merupakan penyakit yang dapat menyerang segala usia, namun umumnya lebih sering menimbulkan keluhan pada usia 50 tahun atau lebih.\r\n\r\nAda dua jenis ambeien, yaitu hemoroid internal dan eksternal. Pembuluh darah yang membengkak di dalam anus dan tidak terlihat dari luar disebut sebagai hemoroid internal. \r\nSedangkan pembengkakan yang terjadi di luar anus dekat lubang anus, terasa lebih nyeri, serta tampak dari luar disebut hemoroid eksternal.\r\n', 'wasir.jpg'),
(40, 'Xerosis', 'Xerosis banyak ditemukan pada orang-orang yang tinggal di daerah dingin dengan tingkat kelembapan yang rendah. Kondisi ini dapat dihindari dengan mengonsumsi air yang cukup setiap hari.Asupan cairan sangat diperlukan karena cairan dibutuhkan untuk memlembapkan kulit manusia agar tetap lembut dan sehat.\r\n\r\nKulit kering dapat menimbulkan rasa gatal. Jika kulit yang sudah pecah-pecah ini digaruk, dapat semakin meluas dan menimbulkan infeksi kulit.Kulit kering dapat ditangani sendiri di rumah, tetapi penderita harus segera menemui dokter jika muncul gejala\r\n', 'xero.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(14, 'cek', 'cek@gmail.com', 'default.jpg', '$2y$10$q5VbD3E83L2RD1VXDbigD.wwNIFVfTWRLyb49DDXf9lKueWYBfhKK', 2, 1, 1586751716),
(20, 'chezapangestu', 'cheza426@gmail.com', 'default.jpg', '$2y$10$sMY1C/vI8dKOrqORoU5/I.bUtvxF/1VylemdxVMlmCn.dVyE65eAe', 2, 1, 1587721396);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamus`
--
ALTER TABLE `kamus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kamus`
--
ALTER TABLE `kamus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
