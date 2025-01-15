---
permalink: "/submit/"
layout: layout.html
---
<div class="section-gallery-submit">
{% include "gallery.html" %}
</div>
<section class="section-submission">
    <h1>Leerräume einreichen</h1>
    <div class="container-submission">
    <form name="submission" method="POST" data-netlify="true" onSubmit="submit">
        <input type="hidden" name="subject" 
            value="Sales inquiry from leerraeume.netlify.app" />
        <input type="text" id="name" name="name"placeholder="Gebäude-/Raumname" required><br><br>
        <input type="text" id="plz" name="plz" placeholder="Postleitzahl" required><br><br>
        <input type="text" id="ort" name="ort" placeholder="Ort" required><br><br>
        <input type="email" id="email" name="email" placeholder="E-Mail" required><br><br>
        <textarea id="description" name="description"
            placeholder="Beschreibung und Tipps für Kontaktmöglichkeiten" rows="10" cols="30" required>
        </textarea><br><br>
        <div class="container-img-upload">
            <label for="file" class="btn-upload-file">Bilder hochladen</label><br>
            <input type="file" id="file" name="file" accept="image/*" multiple required><br><br>
        </div>
        <div class="captcha-submit" data-netlify-recaptcha="true"></div>
        <button class="btn-submit" type="submit" value="Send Message">Einreichen</button>
    </form>
    <div>
</section>
