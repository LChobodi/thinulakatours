<!DOCTYPE html>
<html lang="si">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>තිනුලක දඹදිව වන්දනා සංවිධානය</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Cinzel:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
body { font-family: "Inter", sans-serif; background: linear-gradient(135deg,#0f0a23 0%,#1e1b4b 50%,#2d1b69 100%); color:#f5f3ff; }
.premium-font { font-family: "Cinzel", serif; }
.text-gradient { background: linear-gradient(135deg,#facc15 0%,#8b5cf6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
.glass-effect { background: rgba(255,255,255,0.08); backdrop-filter: blur(20px); border:1px solid rgba(255,255,255,0.1); border-radius:16px; padding:20px; }
.section { padding:60px 20px; }
.hero { text-align:center; margin-bottom:40px; }
.hero h1 { font-size:2.5rem; margin-bottom:20px; }
.hero p { font-size:1rem; line-height:1.6; }
.list-item { margin-bottom:10px; display:flex; align-items:flex-start; gap:10px; }
.icon-circle { color:#facc15; margin-top:4px; }
.btn-royal { background: linear-gradient(135deg,#6d28d9 0%,#8b5cf6 50%,#facc15 100%); color:#fff; padding:16px 32px; border-radius:9999px; font-size:1.25rem; font-weight:600; text-decoration:none; transition:all 0.3s ease; display:inline-block; }
.btn-royal:hover { transform: translateY(-4px); }
.toggle-container {
  display: flex;
  align-items: center;
  position:relative;
  justify-content: space-between;
  margin-top: 0px; /* adjust as needed */
}
.toggle-option { cursor: pointer; padding: 8px 16px; font-weight:600; border-radius:9999px; transition:all 0.3s ease; }
.toggle-option.active { background: linear-gradient(135deg,#6d28d9 0%,#facc15 100%); color:white; }
</style>
</head>
<body>

<!-- Language Toggle -->
<div class="toggle-container mt-5">
  <!-- Back button (left) -->
  <a href="index.php" 
     class="btn-royal px-6 py-3 text-lg font-bold shadow-xl hover:scale-105 transition-transform duration-300">
    <i class="fas fa-arrow-left mr-2"></i> Back
  </a>
  
  <!-- Language toggle (right) -->
  <div class="flex gap-2">
    <div class="toggle-option active" id="si-btn">සිංහල</div>
    <div class="toggle-option" id="en-btn">English</div>
  </div>
</div>

<div id="content"></div>

<script>
const contentData = {
  si: `
    <section class="hero section">
      <h1 class="premium-font text-gradient">තිනුලක දඹදිව වන්දනා සංවිධානය සමඟ එකතු වූ ඔබට හදවතින්ම ස්තූතියි... 🙏🙏🙏</h1>
      <p>දිවයිනේ අවම මිළ ගණන් සහ උපරිම පහසුකම් සමඟ දින 12 ක වන්දනා ගමන සදහා අය කිරීම: රු. 226,000/-<br>10 දෙනෙකුගෙන් සැදුම් ලත් කණ්ඩායම් සඳහා සුවිශේෂි වරප්‍රසාද හිමි වේ.</p>
    </section>

    <section class="section glass-effect max-w-5xl mx-auto">
      <h2 class="premium-font text-2xl mb-6 text-gradient">අප ආයතනය මඟින් ඔබට ලබාදෙන සේවාවන්</h2>
      <div class="flex flex-col gap-4">
        <div class="list-item"><i class="fas fa-star icon-circle"></i> වසර 10 කට අධික පළපුරුද්ද සමග සුවිශේෂි මග පෙන්වීම.</div>
        <div class="list-item"><i class="fas fa-passport icon-circle"></i> විදේශ ගමන් බලපත්‍රය ලබා ගැනීමට මඟ පෙන්වීම සහ ඉන්දියානු/නේපාල් වීසා ලබා දීම.</div>
        <div class="list-item"><i class="fas fa-hotel icon-circle"></i> සුඛෝපභෝගී හෝටල් වල නවාතැන් (උණු වතුර සහ යාබද නාන කාමර සමඟ).</div>
        <div class="list-item"><i class="fas fa-utensils icon-circle"></i> ප්‍රණීත ආහාර සහ බෝතල් කළ ජලය ලබාදීම.</div>
        <div class="list-item"><i class="fas fa-bus icon-circle"></i> කිසිදු දුම්රිය ගමන් කිරීමකින් තොරව සුඛෝපභෝගී බස් රථ වලින් පිටත් වීම.</div>
        <div class="list-item"><i class="fas fa-gift icon-circle"></i> ගමන් මළු සහ වන්දනා DVD නොමිලේ ලබාදීම.</div>
        <div class="list-item"><i class="fas fa-ticket-alt icon-circle"></i> ඉන්දියාවේ සියලු වන්දනා ස්ථාන සඳහා ඇතුල්වීමේ ටිකට්පත් ලබාදීම.</div>
        <div class="list-item"><i class="fas fa-suitcase icon-circle"></i> වටිනා ලොකු බෑගයක් සහ අත් බෑගයක් (30 KG) ලබාදීම.</div>
        <div class="list-item"><i class="fas fa-shield-alt icon-circle"></i> ලක්ශ 03ක අනතුරු හා මරණ රක්ෂණය.</div>
        <div class="list-item"><i class="fas fa-door-open icon-circle"></i> ඔබගේ ගමන් මලු කාමරයට ගෙනැවිත් දීම.</div>
        <div class="list-item"><i class="fas fa-shopping-bag icon-circle"></i> ආරක්ෂිත සාප්පු සවාරි.</div>
        <div class="list-item"><i class="fas fa-book icon-circle"></i> මාර්ගෝපදේශනය, වන්දනාමාන කරවීම සහ නිවැරදි විස්තර ලබාදීම.</div>
      </div>
    </section>

    <!-- Itinerary Section -->
	<section class="section glass-effect max-w-5xl mx-auto mt-10">
    <h2 class="premium-font text-2xl mb-6 text-gradient">වන්දනා ස්ථාන</h2>
    <p>🔻 බුද්ධගයාව, 🔻 සැවැත් නුවර ජේථවනාරාමය, 🔻 බරනැස, 🔻 රජගහ නුවර, 🔻 කපිලවස්තුපුර, 🔻 ලුම්බිණි, 🔻 කුසිනාරා, 🔻 විශාලා නුවර, 🔻 අග්‍රා, 🔻 දිල්ලී...</p>
    <p>සම්පූර්ණ විස්තර සඳහා පිටුවේ පහත ලැයිස්තුව බලන්න.</p>
	</section>
	<!-- Button to Gallery -->
	<div class="mt-6 text-center">
    <a href="gallery.php" class="btn-royal" data-lang-sinhala="ගැලරිය බලන්න" data-lang-english="View Gallery">
      <i class="fas fa-images mr-2"></i> ගැලරිය බලන්න
    </a>
	</div>
    <section class="section text-center">
      <h2 class="premium-font text-3xl mb-6 text-gradient">බඳවා ගැනීම් හා විමසීම්</h2>
      <p>ආසන සීමිත බැවින් දැන්ම වෙන් කරවා ගන්න.</p>
      <p>Whatsapp Contacts:<br>
        ✅ Managing Director: <a href="https://wa.me/message/UB6TCUEZOD7MC1P8" target="_blank">Sanuja Disaanayake</a><br>
        ✅ Director: <a href="https://whatsapp.com/dl" target="_blank">Chandima Ruwan Ariyarathna</a><br>
        ✅ Co-Founder: <a href="https://whatsapp.com/biz" target="_blank">Athula Sampath Dissanayake</a>
      </p>
      <p>📞 Call: +94 76 207 82 53 / +94 70 368 51 62</p>
      <p>Email: thinulakatours@gmail.com | Web: www.thinulakatour.com</p>
      <a href="https://forms.gle/sTHao7ESq4vC3P1P8" class="btn-royal mt-4"><i class="fas fa-star mr-2"></i> දැන් එකතු වන්න</a>
    </section>
  `,
  en: `
    <section class="hero section">
      <h1 class="premium-font text-gradient">Welcome to Thinulaka Dambadiva Pilgrimage</h1>
      <p>12-day pilgrimage at the lowest price with maximum facilities: Rs. 226,000/-<br>Special privileges for groups of 10 people!</p>
    </section>

    <section class="section glass-effect max-w-5xl mx-auto">
      <h2 class="premium-font text-2xl mb-6 text-gradient">Our Organization Offers You</h2>
      <div class="flex flex-col gap-4">
        <div class="list-item"><i class="fas fa-star icon-circle"></i> Special guidance with over 10 years of experience.</div>
        <div class="list-item"><i class="fas fa-passport icon-circle"></i> Assistance with foreign passport and Indian/Nepal visas.</div>
        <div class="list-item"><i class="fas fa-hotel icon-circle"></i> Accommodation in luxury hotels with elevators, hot water, and attached bathrooms.</div>
        <div class="list-item"><i class="fas fa-utensils icon-circle"></i> Delicious food and bottled water.</div>
        <div class="list-item"><i class="fas fa-bus icon-circle"></i> Departure in luxury buses (no train travel).</div>
        <div class="list-item"><i class="fas fa-gift icon-circle"></i> Free luggage and pilgrimage DVDs.</div>
        <div class="list-item"><i class="fas fa-ticket-alt icon-circle"></i> Entry tickets to all pilgrimage sites in India.</div>
        <div class="list-item"><i class="fas fa-suitcase icon-circle"></i> Valuable large bag and hand bag (30 KG).</div>
        <div class="list-item"><i class="fas fa-shield-alt icon-circle"></i> Accident and death insurance of 3 lakhs.</div>
        <div class="list-item"><i class="fas fa-door-open icon-circle"></i> Luggage delivered to your room in India.</div>
        <div class="list-item"><i class="fas fa-shopping-bag icon-circle"></i> Safe shopping trips.</div>
        <div class="list-item"><i class="fas fa-book icon-circle"></i> Special guidance and accurate pilgrimage arrangements.</div>
      </div>
    </section>

    <section class="section glass-effect max-w-5xl mx-auto mt-10">
      <h2 class="premium-font text-2xl mb-6 text-gradient">Pilgrimage Activities and Itinerary</h2>
      <p>Full details of activities in Buddhagaya, Jetavana Monastery, Kusinara, Vishala Mahanuwara, Baranasa, Delhi, Agra and all pilgrimage sites.</p>
    </section>
	<!-- Button to Gallery -->
	<div class="mt-6 text-center">
    <a href="gallery.php" class="btn-royal">
      <i class="fas fa-images mr-2"></i> View Gallery
    </a>
	</div>
    <section class="section text-center">
      <h2 class="premium-font text-3xl mb-6 text-gradient">Registration & Contacts</h2>
      <p>Seats are limited! Reserve now.</p>
      <p>Whatsapp Contacts:<br>
        ✅ Managing Director: <a href="https://wa.me/message/UB6TCUEZOD7MC1P8" target="_blank">Sanuja Disaanayake</a><br>
        ✅ Director: <a href="https://whatsapp.com/dl" target="_blank">Chandima Ruwan Ariyarathna</a><br>
        ✅ Co-Founder: <a href="https://whatsapp.com/biz" target="_blank">Athula Sampath Dissanayake</a>
      </p>
      <p>📞 Call: +94 76 207 82 53 / +94 70 368 51 62</p>
      <p>Email: thinulakatours@gmail.com | Web: www.thinulakatour.com</p>
      <a href="https://forms.gle/sTHao7ESq4vC3P1P8" class="btn-royal mt-4"><i class="fas fa-star mr-2"></i> Join Now</a>
    </section>
  `
}

const contentDiv = document.getElementById('content');
const siBtn = document.getElementById('si-btn');
const enBtn = document.getElementById('en-btn');

contentDiv.innerHTML = contentData.si;

siBtn.addEventListener('click', () => {
  contentDiv.innerHTML = contentData.si;
  siBtn.classList.add('active');
  enBtn.classList.remove('active');
});

enBtn.addEventListener('click', () => {
  contentDiv.innerHTML = contentData.en;
  enBtn.classList.add('active');
  siBtn.classList.remove('active');
});
</script>

</body>
</html>
