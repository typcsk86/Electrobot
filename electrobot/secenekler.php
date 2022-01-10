<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/searchStyle.css">
    <title>Satış Sözleşmesi ve Müşteri Hizmetleri</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <a class="navbar-brand" href="anasayfa">
            <img src="https://findicons.com/files/icons/2770/ios_7_icons/128/circuit.png" width="30" height="30" class="d-inline-block align-top " alt="Electrobot">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="anasayfa">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategoriler
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="arduinoUrunler">Arduino</a>
                            <a class="dropdown-item" href="raspberryUrunler">Raspberry</a>
                            <a class="dropdown-item" href="gelistirmekartUrunler">Geliştirme Kartları</a>
                            <a class="dropdown-item" href="sensorUrunler">Sensörler</a>
                            <a class="dropdown-item" href="aracgerecUrunler">Araç-Gereç</a>
                        </div>
                      </div>
                </li>
            </ul>
            <form class="form-inline">
                <div class="container">
                    <div class="wrapper">
                        <div class="search-input">
                        <a href="" target="_blank" hidden></a>
                        <input type="text" placeholder="Search.." class="searchText">
                        <div class="autocom-box">
                            <!-- Arama listesinin sonuçları burada görünür -->
                        </div>
                        <div class="icon"><i class="fas fa-search"></i></div>
                        </div>
                    </div>
                    <script src="js/searchScript.js"></script>
                    <script src="js/suggestions1.js"></script>
                </div>
            </form>
            <form method="post">
                <?php
                    if(isset($_SESSION['email'])){
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary mr-2" href="hesabim">Hesabım</a>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="php/logout">Çıkış Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary mr-2" href="kayit">Kayıt Ol</a>';
                        echo '</li>';
                        echo '<li class="nav-item active">';
                        echo '<a class="btn btn-outline-primary" href="giris">Giriş Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    }
                ?>
            </form>
        </div>
    </nav>
	
	
<div class="container my-5">

<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
	    <h5>Müşteri Hizmetleri</h5>
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"> Kişisel Verilerin Korunması</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Garanti ve İade</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Satış Sözleşmesi</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Kolay Ödeme</a>
	   <br>
	  <h5>Ödeme Seçenekleri</h5>
	  <a class="list-group-item list-group-item-action" id="list-a-list" data-toggle="list" href="#list-a" role="tab" aria-controls="a">Kredi Kartı</a>
	  <a class="list-group-item list-group-item-action" id="list-b-list" data-toggle="list" href="#list-b" role="tab" aria-controls="b">EFT/Havale</a>
	  <a class="list-group-item list-group-item-action" id="list-c-list" data-toggle="list" href="#list-c" role="tab" aria-controls="c">Paypal</a>
	  <a class="list-group-item list-group-item-action" id="list-d-list" data-toggle="list" href="#list-d" role="tab" aria-controls="d">İninal</a>
	  <a class="list-group-item list-group-item-action" id="list-e-list" data-toggle="list" href="#list-e" role="tab" aria-controls="e">Kapıda Ödeme</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><center><h1>Müşteri Hizmetleri</h1></center>
     <h2>Kişisel Verilerin İşlenmesi Hakkında Açık Rıza Metni</h2>
        <p> Site/Mobil Uygulama üyelik ("üye") işlemlerinin gerçekleştirilmesini sağlamak, üye girişi yapabilmem, üyelik bilgilendirmelerini alabilmem, üye olarak Site/Mobil Uygulama üzerinden alışveriş yapmak için her alışveriş işleminde tekrar bilgilerimin girilmesine gerek kalmadan üye bilgilerimi kullanarak alışveriş yapabilmem, üye olarak daha önce verdiğim siparişleri ve sipariş geçmişini görüntüleyebilmem, özel üyelik programlarından faydalanabilmem, mağazalar ve Site/Mobil Uygulama'dan yapacağım alışverişlerime göre oluşturulacak bana özel imkan ve tekliflerden yararlanmam, puan kazanabilmem ve bu puanları kullanabilmem, genel veya bana özel kişiselleştirilmiş kampanyalar, avantajlar, promosyonlar, reklamların oluşturulması, kampanyaların düzenlenmesi, segmentasyon, raporlama, profilleme, pazarlama ve analiz çalışmalarının yapılması, Mobil Uygulama, Site veya diğer 3. taraf ortamlarda  ait reklamların ve pazarlama/iletişim faaliyetlerinin (Mobil Uygulama ve Site'deki bildirimler, pop-up gösterimi, kişiye özel teklifler, kullanıcı ekranlarının özelleştirilmesi, reklam, arama, anket vs.) yapılması amaçlarıyla işlenmesine ve veri zenginleştirme/tekilleştirme faaliyetlerinde bulunulması amaçlarıyla  iş ortaklarıyla paylaşılmasına ve bu şirketlerle paylaştığınız verilerinizin tarafında da güncellenmesi, zenginleştirilmesine, bilişim teknolojileri, pazarlama/reklam faaliyetleri ya da uzmanlık gerektiren danışmanlık vb. konularda ürün ve hizmet desteği almak amacıyla yurtiçi ve yurtdışında bulunan hizmet sağlayıcı ve tedarikçileriyle paylaşılmasına rıza veriyorum.</p></div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><h2>Garanti</h2>
        <p>Ürünlerimiz, ürün açıklamasında özellikle aksi belirtilmedikçe, yasal olarak yedek parça statüsündeki ürünler olarak geçmektedir. Kapalı bir şekilde değil, açık devre şeklinde satışa sunuldukları için hata yapmaya çok müsaittir ve bu yüzden ürünlerimize sadece ilk çalışma garantisi verilir.</p>
		<h2>İade</h2>
		<p>Siparişinizi kargodan teslim aldığınız günden itibaren 14 gün içinde , "Atatürk Bul. No:108/8 İkitelli - Başakşehir / İstanbul" adresine aşağıdaki koşullar dâhilinde İade Bölümü sizin tarafınızdan eksiksiz doldurulmuş fatura çıktısı ile birlikte iade edebilirsiniz.(*) Bu kapsamda geri göndereceğiniz ürünler için herhangi bir kargo bedeli ödemezsiniz. İade edeceğiniz ürüne ait, hediye olarak verilen promosyonlu, kampanyalı ürünlerin de aynı anda iade edilmesi gerekir ve varsa ilişkili hediye çekleri de iptal edilir. İade gerçekleştirmek istediğinizde işlemlerinizin aksamaması için lütfen yusufffff@gmail.com e-posta adresine bildirimde bulunun.</p>
		
	    <h2>İade Koşulları</h2>
		<ul><li><p> Niteliği itibarıyla iade edilemeyecek ürünler, fiyatı borsa veya teşkilatlanmış diğer piyasalarda belirlenen mallar, tüketicinin istekleri veya açıkça onun kişisel ihtiyaçları doğrultusunda hazırlanan mallar, süreli yayınlar, hızlı bozulan veya son kullanma tarihi geçme ihtimali olan mallar için cayma hakkı kullanılamaz.</p></li>
		<li><p> Ambalajlı ürünlerde cayma hakkının kullanılması için, ürünün ambalajının açılmamış, bozulmamış ve ürünün kullanılmamış olması gerekmektedir. Orjinal ambalajı olmadan iade olarak gönderilen ürünlerin iadesi kabul edilmeyecektir.</p></li></ul>
		<p>İade işleminin onaylanması durumunda, iade başvurusundaki tercihiniz doğrultusunda sizin için ürün bedeli tutarında hediye çeki tanımlanır ya da 3 iş günü içinde “ürün bedeli” tarafınıza geri ödenir. Ürün bedelinin tarafınıza geri ödenmesini tercih ederseniz; eğer ödeme şekliniz “Kredi Kartı” ise; para iadesi online olarak kredi kartınıza yapılacaktır. Ödeme şekliniz “Havale/EFT” veya "Kapıda Ödeme" ise; bildirimde bulunduğunuz IBAN numarasına ait hesabınıza para iadesi yapılır. İade tutarınızın hesabınıza/kartınıza yansıması bankaların işlem sürelerine göre farklılık gösterebilir.</p>
		<h3>Hasar Görmüş/Deforme Ürün</h3>
		 <ul><li><p> Ürününüzü teslim alırken kontrol etmenizi ve üründe fark edebileceğiniz bir hasar ya da ambalaj deformesi olup olmadığını kargo görevlisi yanında tespit etmenizi özellikle öneririz. Eğer bu aşamada bir tespitte bulunursanız kargo görevlisine “Hasar Tespit Tutanağı” hazırlatmanızı ve ürünü teslim almadan aynı kargo ile geri göndermenizi rica ederiz. Aldığınız ürün "hasarlı" ya da ambalajı "deforme" ise bunun için "Kargo Hasar Tespit Tutanağı" gerekmektedir. Aksi takdirde ürününüz için yapacağınız "hasar bildirimi" kabul edilmeyecektir.</p></li>
		<li><p>Kargo tarafından Robotistan’a, ürünün hasarlı olduğuna ilişkin bilgilendirme yapıldığında; ürünün iade işlemleri başlatılacak ve ürün tutarı değerinde “para iadesi” gerçekleştirilecektir. </p></li></ul>
		<h3>Arızalı/Bozuk Ürün</h3>
		<p>Tüm ürünlerimize ilk çalışma garantisi verilir. Ürününüzün ilk çalışması esnasında arıza problemi yaşamanız halinde garanti kapsamında iade/tamirat vb. süreçler için yapılması gerekenler ve işleyiş aşağıda belirtilmiştir:</p>
		<ul><li><p> Öncelikle buraya tıklayarak linkteki makalelerden yaşadığınız problemi bulup çözüm önerimizi deneyiniz.</p></li>
		<li><p>Çözüm bulamamanız halinde teslimatın gerçekleşmesinin akabinde 14 gün içerisinde yusufffff3223@gmail.com adresine e-posta atarak ürünün arızalı/bozuk olduğunu mutlaka bize bildirmeniz gerekmektedir.</p></li>
		<li><p>Arızalı/bozuk olduğunu düşündüğünüz ürün faturasının ve buraya tıklayarak ulaşabileceğiniz Arızalı Ürün Kabul Formu'nun çıktını almalısınız.</p></li>
		<li><p>Fatura çıktısı üzerindeki İade Bölümü'nü ve Arızalı Ürün Kabul Formu'nu eksiksiz doldurduktan sonra arızalı/bozuk olduğunu düşündüğünüz ürün ile birlikte bize göndermeniz gerekmektedir. Aşağıdaki adrese, yine aşağıda bildirilen kargo firmaları ile karşılarındaki anlaşma numarasını belirtip alıcı ödemeli gönderebilirsiniz:</p></li>
        <h6>Ovakent Mah. 40.soskak no:2/4 Antakya/Hatay</h6>
		<h6>yurtiçi kargo:</h6>123456789
		<h6>aras kargo:</h6>123456789
		<li><p>Kargo ile göndermiş olduğunuz arızalı/bozuk bildirimi yapılan ürün Robotistan tarafından teslim alındıktan sonra ambalajı ve aksesuarları kontrol edilir ve incelenmek üzere Teknik Destek ekibimize iletilir.</p></li>
		<li><p> Teknik ekip tarafından yapılan testler ve incelemeler en fazla 1 hafta sürecektir.</p></li>
		<li><p>Arıza tespiti sırasında bilgi almak amacıyla sizinle e-posta ile iletişime geçilecektir. 3 iş günü içerisinde size ulaşamamamız durumunda ürününüz teknik çalışmalara devam edilmeksizin 30 günlük beklemeye alınır ve cihazla ilgili bir işlem yapılmaz.</p></li>
		<li><p>Test ve incelemeler sonucunda belirttiğiniz şekilde sorunlu ürün durumu tespit edilirse, tercihiniz doğrultusunda ya ürün yenisi ile değiştirilir, ya da 3 iş günü içinde “ürün bedeli” tarafınıza geri ödenir. Bu durumdaki tüm kargo giderleri Robotistan tarafından karşılanacaktır.</p></li>
		<li><p> Garanti kapsamındaki ürünlerde kullanıcı hatasından kaynaklanan arıza/kusur, “kullanıcı hatası” (düşürme, sıvı teması, vb.) olarak tespit edilirse ürün değişimi ve ücret iadesi yapılmamaktadır. Bu gibi durumlarda tüm kargo giderleri müşteri tarafından karşılanır.</p></li>
		<li><p> Ürününüzde belirtilen şekilde herhangi bir sorun tespit edilmemesi durumunda ise ürünün çalıştırılması ile ilgili müşteriye e-posta yolu ile bildirimde bulunarak ürünü müşteriye geri göndeririz. Bu durumda tüm kargo giderleri müşteri tarafından karşılanır.</p></li>
		<li><p>Teknik testler sonucunda ürün ile ilgili son durum hakkında sizinle e-posta yolu ile iletişime geçilerek bildirimde bulunulur. Sonuca göre değişimi yapılacak ya da sorunsuz olduğu tespit edilen ürün için teslimat bilgisi istenir ve kargo gönderimleri için takip numarası size iletilir. 3 iş günü içerisinde teslim alınmayan ya da güncel teslimat adresi iletilmeyen ürünler 30 günlük beklemeye alınır ve ürünle ilgili hiçbir işlem yapılmaz. 30 günlük bekleme süresi içerisinde teslim alınmayan ürünlerden firmamız sorumlu değildir.</p></li>
		<li><p>Hafızalı ürünlerde sisteminizde yedeklerinizin olmaması ve cihaza yapılacak işlemlerden sonra oluşacak veri kayıplarından firmamız sorumlu tutulamaz.</p></li>
		<li><p>Servisimizde korsan, kopya ve lisanssız hiçbir yazılım yüklenmez. Önceden yüklenmiş bu tür yazılımlar için servisimiz sorumlu tutulamaz.</p></li></ul></div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"> <h1>Satış Sözleşmesi</h1>
	 <h5>GENEL HÜKÜMLER</h5>
       <ul><li><p>Sözleşme konusu ürün, yasal 30 günlük süreyi aşmamak koşulu ile her bir ürün için ALICI'nın yerleşim yerinin uzaklığına bağlı olarak internet sitesinde ön bilgiler içinde açıklanan süre içinde ALICI veya gösterdiği adresteki kişi/kuruluşa teslim edilir.</p></li>
	   <li><p>Sözleşme konusu ürün, ALICI'dan başka bir kişi/kuruluşa teslim edilecek ise, teslim edilecek kişi/kuruluşun teslimatı kabul etmemesininden SATICI sorumlu tutulamaz.</p></li>
	   <li><p>SATICI, sözleşme konusu ürünün sağlam, eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri ve kullanım klavuzları ile teslim edilmesinden sorumludur.</p></li>
	   <li><p> Sözleşme konusu ürünün teslimatı için işbu sözleşmenin imzalı nüshasının SATICI'ya ulaştırılmış olması ve bedelinin ALICI'nın tercih ettiği ödeme şekli ile ödenmiş olması şarttır. Herhangi bir nedenle ürün bedeli ödenmez veya banka kayıtlarında iptal edilir ise, SATICI ürünün teslimi yükümlülüğünden kurtulmuş kabul edilir.</p></li>
	   <li><p>Ürünün tesliminden sonra ALICI'ya ait kredi kartının ALICI'nın kusurundan kaynaklanmayan bir şekilde yetkisiz kişilerce haksız veya hukuka aykırı olarak kullanılması nedeni ile ilgili banka veya finans kuruluşun ürün bedelini SATICI'ya ödememesi halinde, ALICI'nın kendisine teslim edilmiş olması kaydıyla ürünün 3 gün içinde SATICI'ya gönderilmesi zorunludur. Bu takdirde nakliye giderleri ALICI'ya aittir.</p></li>
	   <li><p>SATICI mücbir sebepler veya nakliyeyi engelleyen hava muhalefeti, ulaşımın kesilmesi gibi olağanüstü durumlar nedeni ile sözleşme konusu ürünü süresi içinde teslim edemez ise, durumu ALICI'ya bildirmekle yükümlüdür. Bu takdirde ALICI siparişin iptal edilmesini, sözleşme konusu ürünün varsa emsali ile değiştirilmesini, ve/veya teslimat süresinin engelleyici durumun ortadan kalkmasına kadar ertelenmesi haklarından birini kullanabilir. ALICI'nın siparişi iptal etmesi halinde ödediği tutar 10 gün içinde kendisine nakten ve defaten ödenir.</p></li>
	   <li><p>Garanti belgesi ile satılan ürünlerden olan veya olmayan ürünlerin arızalı veya bozuk olanlar, garanti şartları içinde gerekli onarımın yapılması için SATICI'ya gönderilebilir, bu takdirde kargo giderleri SATICI tarafından karşılanacaktır.</p></li>
	   <li><p>İşbu sözleşme, ALICI tarafından imzalanıp SATICI'ya faks veya posta yolu ile ulaştırılmasından sonra geçerlilik kazanır.</p></li></ul>
	   <h5>CAYMA HAKKI</h5>
	   <p>ALICI, sözleşme konusu ürürünün kendisine veya gösterdiği adresteki kişi/kuruluşa tesliminden itibaren 14 gün içinde cayma hakkına sahiptir. Cayma hakkının kullanılması için bu süre içinde SATICI'ya faks, email veya telefon ile bildirimde bulunulması ve ürünün 6. madde hükümleri çercevesinde kullanılmamış olması şarttır. Bu hakkın kullanılması halinde, 3. kişiye veya ALICI'ya teslim edilen ürünün SATICI'ya gönderildiğine ilişkin kargo teslim tutanağı örneği ile fatura aslının iadesi zorunludur. Bu belgelerin ulaşmasını takip eden 7 gün içinde ürün bedeli ALICI'ya iade edilir. Fatura aslı gönderilmez ise KDV ve varsa sair yasal yükümlülükler iade edilemez. Cayma hakkı nedeni ile iade edilen ürünün kargo bedeli SATICI tarafından karşılanır.</p>
	   <h5>CAYMA HAKKI KULLANILAMAYACAK ÜRÜNLER</h5>
	   <p>Niteliği itibarıyla iade edilemeyecek ürünler, tek kullanımlık ürünler, kopyalanabilir yazılım ve programlar, hızlı bozulan veya son kullanım tarihi geçen ürünler için cayma hakkı kullanılamaz. Aşağıdaki ürünlerde cayma hakkının kullanılması, ürünün ambalajının açılmamış, bozulmamış ve ürünün kullanılmamış olması şartına bağlıdır.</p>
	   <h5>YETKİLİ MAHKEME</h5>
	   <p>İşbu sözleşmenin uygulanmasında, Sanayi ve Ticaret Bakanlığınca ilan edilen değere kadar Tüketici Hakem Heyetleri ile ALICI'nın veya SATICI'nın yerleşim yerindeki Tüketici Mahkemeleri yetkilidir.</p></div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"> <h4>KREDİ KARTI</h4>
        <p>Sitemizden kredi kartıyla güvenli ve pratik şekilde ödeme yaparken 6 aya varan taksit seçeneklerimizden faydalanabilirsiniz.</p>
		<h4>Havale/EFT”</h4>
        <p>Altta bilgileri bulunan hesabımıza havale ve EFT yoluyla ödeme yollayabilirsiniz. Açıklama kısmına sipariş numaranızı yazmanız işlemlerinizin daha hızlı ve hatasız yapılmasına yardımcı olacaktır.</p></div>
		<div class="tab-pane fade" id="list-a" role="tabpanel" aria-labelledby="list-a-list"><p><ul><li>Bonus</li>
		<li>Maxsimum</li><li>Axess</li><li>World</li><li>Caed Finans</li><li>Paraf</li></ul></p></div>
		<div class="tab-pane fade" id="list-b" role="tabpanel" aria-labelledby="list-b-list"><p>Bunun için siparişinizi oluştururken havale veya EFT ile ödeme adımında istediğiniz bankayı seçip siparişinizi tamamlayın.Siparişinizi tamamladıktan sonra müşterisi olduğunuz bankanın internet şubesinden, mobil şubesinden, banka şubesinden veya ATM’sinden para transferi işlemini gerçekleştirin.
		<h6>Havale işlemini gerçekleştirirken dikkat etmeniz gerekenler:</h6>
		 <ul><li>Ödeme aşamasında seçtiğiniz bankanın aşağıdaki hesap numarasına veya IBAN’ına para transferini gerçekleştirmelisiniz.</li>
		 <li>Açıklama alanına 9 haneli sipariş numaranızı yazmalısınız.</li>
		 <li>Kargo ücreti dahil tam sipariş tutarınız kadar transfer yapmalısınız.</li>
		 <li>EFT’li işlemlerde Alıcı adını "D-Market Elektronik Hizmetler ve Tic. A.Ş." olarak girmelisiniz.</li></ul>
		Tüm bilgileri eksiksiz ve doğru olarak girdikten sonra havale veya EFT işlemini yaptığınızda, siparişiniz 1 iş günü içerisinde onaylanır.
        Bankanız, bu işlem için işlem ücreti alabilir.
		<h6>Anlaşmalı bankaların İBAN numaraları:</h6>
		<ul><li>Garanti</li>
		İBAN No: TR12345678912346005
		<li>Ziraat</li>
		İBAN No: TR12345678912346005
		<li>Yapı Kredi</li>
		İBAN No: TR12345678912346005
		<li>Halk Bank</li>
		İBAN No: TR12345678912346005</ul></p></div>
		<div class="tab-pane fade" id="list-c" role="tabpanel" aria-labelledby="list-c-list"><p>...</p></div>
		<div class="tab-pane fade" id="list-d" role="tabpanel" aria-labelledby="list-d-list"><p>...</p></div>
		<div class="tab-pane fade" id="list-e" role="tabpanel" aria-labelledby="list-e-list"><p>...</p></div>
    </div>
  </div>
</div>



</div>
   
   
   
<footer class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h5>Hızlı Erişim</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="anasayfa" class="text-muted">Anasayfa</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                </div>

                <div class="col-6 col-md-3">
                    <h5>Kurumsal Bilgiler</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="iletisim" class="text-muted">İletişim</a>
                        </li>
                        <li>
                            <a href="hakkimizda" class="text-muted">Hakkımızda</a>
                </div>

                <div class="col-6 col-md-3">
                    <h5>Yardım</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="kayitkosullari" class="text-muted">Kayıt Koşulları</a>
                        </li>
                        <li>
                            <a href="sikcasorulansorular" class="text-muted">Sıkça Sorulan Sorular</a>
                        </li>
                        <li>
                            <a href="secenekler" class="text-muted">Satış Sözleşmesi ve Müşteri Hizmetleri</a>
                        </li>

                </div>
            </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>