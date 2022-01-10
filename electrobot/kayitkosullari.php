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
    <title>Kayıt Koşulları</title>
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
            <h1 data-aos="fade-up" class="display-4 text-center mb-2">Kayıt Koşulları</h1>
            <div class="row">
                <div class="col-4">
                  <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Üyelik Sözleşmesi</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Mesafeli Satış Sözleşmesi</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><center><h1>Üyelik Sözleşmesi</h1></center>
                        <p>
                            electrobot.com web sitesine girmeniz veya web sitedeki herhangi bir bilgiyi kullanmanız aşağıdaki hüküm ve koşulları kabul ettiğiniz anlamına gelmektedir.
                            
                            Bu internet sitesine girilmesi, sitenin ya da sitedeki bilgilerin ve diğer verilerin programların vs. kullanılması sebebiyle, sözleşmenin ihlali, haksız fiil, ya da başkaca sebeplere binaen, doğabilecek doğrudan ya da dolaylı hiçbir zarardan Electrobot sorumlu değildir. 
                            Electrobot, sözleşmenin ihlali, haksız fiil, ihmal veya diğer sebepler neticesinde; işlemin kesintiye uğraması, hata, ihmal, kesinti hususunda herhangi bir sorumluluk kabul etmez.
                            Electrobot, işbu site ve site uzantısında mevcut her tür hizmet, ürün, siteyi kullanma koşulları ile sitede sunulan bilgileri önceden bir ihtara gerek olmaksızın değiştirme, siteyi yeniden organize etme, yayını durdurma hakkını saklı tutar. 
                            Değişiklikler sitede yayım anında yürürlüğe girer. Sitenin kullanımı ya da siteye giriş ile bu değişiklikler de kabul edilmiş sayılır. Bu koşullar link verilen diğer web sayfaları için de geçerlidir.
                            Electrobot, sözleşmenin ihlali, haksız fiil, ihmal veya diğer sebepler neticesinde; işlemin kesintiye uğraması, hata, ihmal, kesinti, silinme, kayıp, işlemin veya iletişimin gecikmesi, bilgisayar virüsü, iletişim hatası, hırsızlık, imha veya izinsiz olarak kayıtlara girilmesi, değiştirilmesi veya kullanılması hususunda herhangi bir sorumluluk kabul etmez.
                            Bu internet sitesi Electrobot'in kontrolü altında olmayan başka internet sitelerine bağlantı veya referans içerebilir. 
                            Electrobot, bu sitelerin içerikleri veya içerdikleri diğer bağlantılardan sorumlu değildir.
                            Electrobot bu internet sitesinin genel görünüm ve dizaynı ile internet sitesindeki tüm bilgi, resim, Electrobot markası ve diğer markalar, electrobot.com alan adı, logo, ikon, demonstratif, yazılı, elektronik, grafik veya makinede okunabilir şekilde sunulan teknik veriler, bilgisayar yazılımları, uygulanan satış sistemi, iş metodu ve iş modeli de dahil tüm materyallerin ("Materyaller") ve bunlara ilişkin fikri ve sınai mülkiyet haklarının sahibi veya lisans sahibidir ve yasal koruma altındadır. 
                            Internet sitesinde bulunan hiçbir Materyal; önceden izin alınmadan ve kaynak gösterilmeden, kod ve yazılım da dahil olmak üzere, değiştirilemez, kopyalanamaz, çoğaltılamaz, başka bir lisana çevrilemez, yeniden yayımlanamaz, başka bir bilgisayara yüklenemez, postalanamaz, iletilemez, sunulamaz ya da dağıtılamaz. 
                            Internet sitesinin bütünü veya bir kısmı başka bir internet sitesinde izinsiz olarak kullanılamaz. Aksine hareketler hukuki ve cezai sorumluluğu gerektirir. Electrobot'in burada açıkça belirtilmeyen diğer tüm hakları saklıdır.
                            electrobot.com'dan alışveriş yapmak için üyelik gerekmektedir.electrobot.com'dan alışveriş yapan kişiler, bunun kişisel kullanım amaçlı bir alışveriş olduğunu, yeniden satış amaçlı olmadığını kabul etmiş olurlar.
                            Havale veya EFT siparişlerinin işleme alınma tarihi, siparişin verildiği tarih değil, sipariş toplam tutarının Electrobot banka hesaplarına ulaştığının görüldüğü tarihtir. Havale veya EFT yoluyla verilen, ancak 1 hafta içerisinde ödemesi gerçekleştirilmeyen siparişler iptal edilmektedir.
                            Electrobot, dilediği zaman bu yasal uyarı sayfasının içeriğini güncelleme yetkisini saklı tutmaktadır.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><center><h1>Mesafeli Satış Sözleşmesi</h1></center>
                        <h5>1 - TARAFLAR</h5>

                        <h6>SATICI</h6>
                        <ul>
                            <li>Satıcı İsim/Unvanı:</li>
                            <li>Satıcı’nın Açık Adresi:</li>
                            <li>Satıcı’nın Telefonu:</li>
                            <li>Satıcı Mersis No:</li>
                            <li>Satıcı E-Posta Adresi :</li>
                            <li>Alıcı’nın İade Halinde Malı Satıcı’ya Göndereceği Kargo Şirketi:</li>
                        </ul>
                       
                    
                        <h6>ALICI</h6>
                        <ul>
                            <li>Adı – Soyadı :</li>
                            <li>Adresi :</li>
                            <li>Telefon :</li>
                            <li>E-Posta :</li>
                        </ul>
                    
                        <h5>SÖZLEŞME’NİN KONUSU VE KAPSAMI</h5>
                        <p>İşbu Mesafeli Satış Sözleşmesi (“<b>Sözleşme</b>”) 6502 Sayılı Tüketicinin Korunması Hakkında Kanun (“<b>Kanun</b>”) ve Mesafeli Sözleşmeler Yönetmeliği’ne uygun olarak düzenlenmiştir. İşbu Sözleşme’nin tarafları işbu Sözleşme tahtında Kanun’dan ve Mesafeli Sözleşmeler Yönetmeliği’nden kaynaklanan yükümlülük ve sorumluluklarını bildiklerini
                            ve anladıklarını kabul ve beyan ederler.</p>
                        <p>İşbu Sözleşme’nin konusunu; Alıcı’nın, Electrobot adlı web sitesinden (“<b>Websitesi</b>”), Satıcı’ya ait mal veya hizmetin satın alınmasına yönelik elektronik olarak sipariş verdiği, Sözleşme’de belirtilen niteliklere sahip mal veya hizmetin
                            satışı ve teslimi ile ilgili olarak Kanun ve Mesafeli Sözleşmeler Yönetmeliği hükümleri gereğince tarafların hak ve yükümlülüklerinin belirlenmesi oluşturur.</p>
                        <p>İşbu Sözleşme’nin akdedilmesi tarafların ayrı ayrı Electrobot ile akdetmiş oldukları Websitesi Üyelik Sözleşmeleri’nin hükümlerinin ifasını engellemeyecek olup taraflar işbu Sözleşme konusu mal veya hizmetin satışında Electrobot'in herhangi bir şekilde taraf olmadığını ve Sözleşme kapsamında tarafların yükümlülüklerini yerine getirmeleri ile ilgili herhangi
                            bir sorumluluğu ve taahhüdü bulunmadığını kabul ve beyan ederler. </p>
                    
                        <h5>SÖZLEŞME KONUSU MAL VE HİZMETİN TEMEL NİTELİKLERİ VE FİYATI (KDV DAHİL)</h5>
                    
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td class="borderLeftBold">Ürün Kodu Ve Adı</td>
                                <td>Adet</td>
                                <td>Satici Unvani</td>
                                <td>Birim Fiyatı</td>
                                <td>Birim İndirimi</td>
                                <td>Kupon</td>
                                <td>Puan</td>
                                <td>Toplam Satış Tutarı</td>
                                <td>Vade Farkı</td>
                                <td class="borderRightBold">KDV Dahil Toplam Tutar</td>
                            </tr>
                            </thead>
                           
                        </table>
                    
                        <p>İlan edilen fiyatlar ve vaatler güncelleme yapılana ve değiştirilene kadar geçerlidir. Süreli olarak ilan edilen fiyatlar ise belirtilen süre sonuna kadar geçerlidir.</p>
                    
                        <ul>
                            <li>Kargo hariç toplam ürün bedeli:</li>
                            <li>Kargo Ücreti:</li>
                            <li>Kargo Dahil Toplam Bedeli:</li>
                            <li>Ödeme Şekli ve Planı:</li>
                            <li>Alınan Vade Farkı:</li>
                            <li>Vade Farkı hesabında kullanılan faiz oranı:</li>
                        </ul>
                    
                        <p>SÖZ KONUSU ÜRÜN BEDELİ, ÖDEME KORUMA SİSTEMİ KAPSAMINDA SATICI ADINA, Electrobot TARAFINDAN ALICI’DAN TAHSİL EDİLMEKTEDİR. ALICI MALIN/HİZMETİN BEDELİNİ SİTEADI’E ÖDEMEKLE, ÜRÜN BEDELİNİ SATICI’YA ÖDEMİŞ SAYILACAKTIR.</p>
                    
                        <h5>MALIN TESLİMİ VE TESLİM ŞEKLİ</h5>
                        <p>Sözleşme Alıcı tarafından elektronik ortamda onaylanmakla yürürlüğe girmiş olup, Alıcı’nın Satıcı’dan satın almış olduğu mal veya hizmetin Alıcı’ya teslim edilmesiyle ifa edilmiş olur. Mal, Alıcı’nın sipariş formunda ve işbu Sözleşme’de belirtmiş olduğu adrese ve belirtilen yetkili kişi/kişilere teslim edilecektir.</p>
                    
                        <h5>TESLİMAT MASRAFLARI VE İFASI</h5>
                        <p>Malın teslimat masrafları aksine bir hüküm yoksa Alıcı’ya aittir. Satıcı, Websitesi’nde teslimat ücretinin kendisince karşılanacağını beyan etmişse teslimat masrafları Satıcı’ya ait olacaktır.</p>
                        <p>Malın teslimatı; ödemenin gerçekleşmesinden sonra taahhüt edilen sürede yapılır. Satıcı, sipariş konusu mal veya hizmetin ediminin yerine getirilmesinin imkansızlaştığı haller saklı kalmak kaydıyla, mal veya hizmeti, Alıcı tarafından mal veya hizmetin sipariş edilmesinden itibaren 30 (otuz) gün içinde teslim eder.</p>
                        <p>Herhangi bir nedenle Alıcı tarafından mal veya hizmetin bedeli ödenmez veya yapılan ödeme banka kayıtlarında iptal edilir ise, Satıcı mal veya hizmetin teslimi yükümlülüğünden kurtulmuş kabul edilir.</p>
                        <p>Malın Satıcı tarafından kargoya verilmesinden sonra ve fakat Alıcı tarafından teslim alınmasından önce Alıcı tarafından yapılan sipariş iptallerinde kargo bedelinden Alıcı sorumludur.</p>
                        <p>Sipariş konusu mal ya da hizmet ediminin yerine getirilmesinin imkansızlaştığı hallerde Satıcı bu durumu öğrendiği tarihten itibaren 3 (üç) gün içinde Alıcı’yı bilgilendirecek ve varsa teslimat masrafları da dâhil olmak üzere tahsil edilen tüm ödemeleri bildirim tarihinden itibaren en geç 14 (on dört) gün içinde iade edecektir.</p>
                    
                        <h5>ALICI’NIN BEYAN VE TAAHHÜTLERİ</h5>
                    
                        <p>Alıcı, Websitesi’nde yer alan Sözleşme konusu mal veya hizmetin temel nitelikleri, satış fiyatı ve ödeme şekli ile teslimat ve kargo bedeline ilişkin olarak Satıcı tarafından yüklenen ön bilgileri okuyup bilgi sahibi olduğunu ve elektronik ortamda gerekli teyidi verdiğini beyan eder.</p>
                        <p>Alıcılar, tüketici sıfatıyla talep ve şikayetlerini yukarıda yer alan Satıcı iletişim bilgilerini kullanarak ve/veya Websitesi’nde yer alan Hesabım&gt; üzerinden ulaştırabilirler.</p>
                        <p>Alıcı, işbu Sözleşme’yi ve Ön Bilgilendirme Formu’nu elektronik ortamda teyit etmekle, mesafeli sözleşmelerin akdinden önce Satıcı tarafından Alıcı’ya verilmesi gereken adres, siparişi verilen mal veya hizmete ait temel özellikler, mal veya hizmetin vergiler dahil fiyatı, ödeme ve teslimat ile teslimat fiyatı bilgilerini de doğru ve eksiksiz olarak edindiğini teyit etmiş
                            olur. Alıcı’nın, teslim edildiği esnada tahrip olmuş, kırık, ambalajı yırtılmış vb. hasarlı ve ayıplı olduğu açıkça belli olan Sözleşme konusu mal veya hizmeti kargo şirketinden teslim alması halinde sorumluluk tamamen kendisine aittir.</p>
                        <p>Mal veya hizmetin tesliminden sonra Alıcı’ya ait kredi kartının Alıcı’nın kusurundan kaynaklanmayan bir şekilde yetkisiz kişilerce haksız veya hukuka aykırı olarak kullanılması nedeni ile ilgili banka veya finans kuruluşunun mal veya hizmetin bedelini Satıcı’ya ödememesi halinde, Alıcı kendisine teslim edilmiş olması kaydıyla mal veya hizmeti 3 (üç) gün içinde Satıcı’ya iade
                            etmekle yükümlüdür. Bu halde teslimat giderleri Alıcı’ya aittir.</p>
                    
                        <h5>SATICI’NIN BEYAN VE TAAHHÜTLERİ</h5>
                        <p>Satıcı, Sözleşme konusu mal veya hizmetin tüketici mevzuatına uygun olarak, sağlam, eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri ve kullanım kılavuzları ile Alıcı’ya teslim edilmesinden sorumludur.</p>
                        <p>Satıcı, mücbir sebepler veya nakliyeyi engelleyen olağanüstü durumlar nedeni ile sözleşme konusu mal veya hizmeti süresi içinde teslim edemez ise, durumu öğrendiği tarihten itibaren 3 (üç) gün içinde Alıcı’ya bildirmekle yükümlüdür.</p>
                        <p>Sözleşme konusu mal veya hizmet, Alıcı’dan başka bir kişiye teslim edilecek ise, teslim edilecek kişinin teslimatı kabul etmemesinden Satıcı sorumlu tutulamaz.</p>
                    
                        <h5>CAYMA HAKKI</h5>
                        <p>Alıcı, hiçbir hukuki ve cezai sorumluluk üstlenmeksizin ve hiçbir gerekçe göstermeksizin, mal satışına ilişkin işlemlerde teslimat tarihinden itibaren, hizmet satışına ilişkin işlemlerde satın alma tarihinden itibaren 14 (on dört) gün içerisinde cayma hakkını kullanabilir. Alıcı, malın teslimine kadar olan süre içinde de cayma hakkını kullanabilir.</p>
                        <p>Alıcı, cayma hakkını Electrobut'a giriş yaparak Electrobut'da yer alan Hesabım&gt;Mevcut Sipariş&gt;Siparişlerim üzerinden "İade Et" bağlantısına tıklayarak kullanabilir. Alıcı’nın ilgili sayfada yer alan iade talep formunu doldurup satıcının iade adres bilgilerini alarak, cayma hakkını kullandığı tarihten itibaren 10 (on) gün içinde malı geri göndermesi gerekmektedir. Mal ile beraber
                            faturasının, malın kutusunun, ambalajının, varsa standart aksesuarları, mal ile birlikte hediye edilen diğer ürünlerin de eksiksiz ve hasarsız olarak iade edilmesi gerekmektedir. Alıcı, cayma süresi içinde malı, işleyişine, teknik özelliklerine ve kullanım talimatlarına uygun bir şekilde kullandığı takdirde meydana gelen değişiklik ve bozulmalardan sorumlu değildir. Cayma
                            hakkının kullanılmasına ilişkin detaylı bilgi Electrobut'da yer alan electrobot.com sayfasında yer almaktadır.</p>
                        <p>Alıcı iade edeceği malı Satıcı’ya Ön Bilgilendirme Formu’nda belirtilen Satıcı’nın anlaşmalı kargo şirketi ile gönderdiği sürece, iade kargo bedeli Satıcı’ya aittir. Alıcı’nın iade edeceği malı Ön Bilgilendirme Formu’nda belirtilen Satıcı’nın anlaşmalı kargo şirketi dışında bir kargo şirketi ile göndermesi halinde, iade kargo bedeli ve malın kargo sürecinde uğrayacağı
                            hasardan Satıcı sorumlu değildir.</p>
                        <p>Alıcı’nın cayma hakkını kullanmasından itibaren 14 (on dört) gün içerisinde (malın Satıcı’nın iade için belirttiği taşıyıcı aracılığıyla geri gönderilmesi kaydıyla), Alıcı’nın ilgili mal veya hizmete ilişkin Satıcı veya Aracı Hizmet Sağlayıcı’ya yaptığı tüm ödemeler Alıcı’ya satın alırken kullandığı ödeme aracına uygun bir şekilde ve tüketiciye herhangi bir masraf veya
                            yükümlülük getirmeden ve tek seferde iade edilecektir. Kredi kullanılarak yapılan alışverişlerde, cayma hakkının usulüne uygun kullanıldığı durumlarda ürün bedeli kredi ile ilişkili hesaba iade edilecektir.</p>
                        <p>Electrobot, İŞBU MESAFELİ SATIŞ SÖZLEŞMESİ’NİN TARAFI OLMADIĞINDAN ALICI’NIN, SİTEADI’E KARŞI CAYMA HAKKI YOKTUR VE Electrobut'tan BEDEL İADESİ VEYA ÜRÜN DEĞİŞİMİ TALEP EDEMEZ.</p>
                    
                        <h5>CAYMA HAKKININ KULLANILAMAYACAĞI HALLER</h5>
                        <p>Mevzuat uyarınca Alıcı aşağıdaki hallerde cayma hakkını kullanamaz:</p>
                        <p>Fiyatı finansal piyasalardaki dalgalanmalara bağlı olarak değişen ve Satıcı’nın kontrolünde olmayan mal veya hizmetlere ilişkin sözleşmelerde (örn. ziynet, altın ve gümüş kategorisindeki ürünler);
                            Alıcı’nın istekleri veya açıkça onun kişisel ihtiyaçları doğrultusunda hazırlanan, niteliği itibariyle geri gönderilmeye elverişli olmayan ve çabuk bozulma tehlikesi olan veya son kullanma tarihi geçme ihtimali olan malların teslimine ilişkin sözleşmelerde;
                            Tesliminden sonra ambalaj, bant, mühür, paket gibi koruyucu unsurları açılmış olan mallardan; iadesi sağlık ve hijyen açısından uygun olmayanların teslimine ilişkin sözleşmelerde;
                            Tesliminden sonra başka ürünlerle karışan ve doğası gereği ayrıştırılması mümkün olmayan mallara ilişkin sözleşmelerde;
                            Alıcı tarafından ambalaj, bant, mühür, paket gibi koruyucu unsurları açılmış olması şartıyla maddi ortamda sunulan kitap, ses veya görüntü kayıtlarına, yazılım programlarına ve bilgisayar sarf malzemelerine ilişkin sözleşmelerde;
                            Abonelik sözleşmesi kapsamında sağlananlar dışında gazete, dergi gibi süreli yayınların teslimine ilişkin sözleşmelerde;
                            Belirli bir tarihte veya dönemde yapılması gereken, konaklama, eşya taşıma, araba kiralama, yiyecek-içecek tedariki ve eğlence veya dinlenme amacıyla yapılan boş zamanın değerlendirilmesine ilişkin sözleşmelerde;
                            Bahis ve piyangoya ilişkin hizmetlerin ifasına ilişkin sözleşmelerde;
                            Cayma hakkı süresi sona ermeden önce, tüketicinin onayı ile ifasına başlanan hizmetlere ilişkin sözleşmelerde; ve
                            Elektronik ortamda anında ifa edilen hizmetler ile tüketiciye anında teslim edilen gayri maddi mallara ilişkin sözleşmelerde (hediye kartı, hediye çeki, para yerine geçen kupon ve benzeri).</p>
                        <p>Mesafeli Sözleşmeler Yönetmeliği’nin kapsamı dışında bırakılmış olan mal veya hizmetler (Satıcı’nın düzenli teslimatları ile Alıcı’nın meskenine teslim edilen gıda maddelerinin, içeceklerin ya da diğer günlük tüketim maddeleri ile seyahat, konaklama, lokantacılık, eğlence sektörü gibi alanlarda hizmetler) bakımından cayma hakkı kullanılamayacaktır.</p>
                        <p>Tatil kategorisinde satışa sunulan bu tür mal ve hizmetlerin iptal ve iade şartları her Satıcı’nın uygulama ve kurallarına tabidir.</p>
                    
                        <h5>UYUŞMAZLIKLARIN ÇÖZÜMÜ</h5>
                        <p>Kanun ve Mesafeli Sözleşmeler Yönetmeliği kapsamında satılan mal veya hizmete ilişkin sorumluluk bizzat Satıcı’ya aittir. Bununla birlikte Alıcılar, satın aldıkları mal ve hizmetlerle ilgili şikâyetlerini Satıcılar’a doğrudan veya  Electrobot üzerinden iletecektir. Şikayetin Electrobot'a iletilmesi halinde Electrobot sorunun çözülmesi için mümkün olan tüm desteği
                            sağlayacaktır.</p>
                        <p>İş bu Mesafeli Satış Sözleşme ile ilgili çıkacak ihtilaflarda; her yıl Gümrük ve Ticaret Bakanlığı tarafından ilan edilen değere kadar Alıcı’nın yerleşim yerindeki ürünü satın aldığı veya ikametgâhının bulunduğu yerdeki İl veya İlçe Tüketici Sorunları Hakem Heyetleri, söz konusu değerin üzerindeki ihtilaflarda ise Tüketici Mahkemeleri yetkilidir.</p>
                    
                        <h5>MAL/HİZMETİN FİYATI</h5>
                        <p>Malın peşin veya vadeli satış fiyatı, sipariş formunda yer almakla birlikte, sipariş sonu gönderilen bilgilendirme e-postası ve ürün ile birlikte müşteriye gönderilen fatura içeriğinde mevcut olan fiyattır. Satıcı veya Electrobot tarafından yapılan indirimler, kuponlar, kargo ücreti ve sair uygulamalar satış fiyatına yansıtılır.</p>
                    
                        <h5>TEMERRÜT HALİ VE HUKUKİ SONUÇLARI</h5>
                        <p>Alıcı’nın, kredi kartı ile yapmış olduğu işlemlerde temerrüde düşmesi halinde kart sahibi bankanın kendisi ile yapmış olduğu kredi kartı sözleşmesi çerçevesinde faiz ödeyecek ve bankaya karşı sorumlu olacaktır. Bu durumda ilgili banka hukuki yollara başvurabilir; doğacak masrafları ve vekâlet ücretini Alıcı’dan talep edebilir ve her koşulda Alıcı’nın borcundan dolayı
                            temerrüde düşmesi halinde, Alıcı’nın borcu gecikmeli ifasından dolayı Satıcı’nın uğradığı zarar ve ziyandan Alıcı sorumlu olacaktır.</p>
                    
                        <h5>BİLDİRİMLER VE DELİL SÖZLEŞMESİ</h5>
                        <p>İşbu Sözleşme tahtında taraflar arasında yapılacak her türlü yazışma, mevzuatta sayılan zorunlu haller dışında, Websitesi’nde yer alan Hesabım&gt;Ürün Sorularım veya elektronik posta aracılığıyla yapılacaktır. Alıcı, işbu Sözleşme’den doğabilecek ihtilaflarda Satıcı’nın ve Electrobot'un resmi defter ve ticari kayıtlarıyla, kendi veritabanında, sunucularında tuttuğu elektronik
                            bilgilerin ve bilgisayar kayıtlarının, bağlayıcı, kesin ve münhasır delil teşkil edeceğini, bu maddenin Hukuk Muhakemeleri Kanunu’nun 193. maddesi anlamında delil sözleşmesi niteliğinde olduğunu kabul, beyan ve taahhüt eder.</p>
                    
                        <h5>YÜRÜRLÜK</h5>
                        <p>14 (on dört) maddeden ibaret bu Sözleşme, taraflarca okunarak, 11/09/2019 tarihinde, Alıcı tarafından elektronik ortamda onaylanmak suretiyle akdedilmiş ve yürürlüğe girmiştir.</p>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>SATICI</td>
                                <td>ALICI</td>
                            </tr>
                           
                            </tbody>
                        </table>
                    </div>
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