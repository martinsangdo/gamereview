<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Latest game review, news, trailer</title>
    <?php require_once ('common_head.php'); ?>

</head>

<body>
<main>
    <?php require_once('header.php'); ?>
    <!-- Related Posts -->
    <div class="container g-py-50">
        <h2>Generic Terms of Service Template</h2>
        <div>
            <p>Please read these terms of service carefully before using Gamereviewnews website (the "service") operated by us.</p>
            <p><strong>Conditions of Use</strong></p>
            <p>We will provide their services to you, which are subject to the conditions stated below in this document. Every time you visit this website, use its services or make a purchase, you accept the following conditions. This is why we urge you to read them carefully.</p>
            <p><strong>Privacy Policy</strong></p>
            <p>Before you continue using our website we advise you to read our <a href="<?php echo base_url('/welcome/privacy'); ?>">privacy policy </a> regarding our user data collection. It will help you better understand our practices.</p>
            <p><strong>Communications</strong></p>
            <p>The entire communication with us is electronic. Every time you send us an email or visit our website, you are going to be communicating with us. You hereby consent to receive communications from us. If you subscribe to the news on our website, you are going to receive regular emails from us. We will continue to communicate with you by posting news and notices on our website and by sending you emails. You also agree that all notices, disclosures, agreements and other communications we provide to you electronically meet the legal requirements that such communications be in writing.</p>
            <p><strong>Applicable Law</strong></p>
            <p>By visiting this website, you agree that the laws of the [your location], without regard to principles of conflict laws, will govern these terms of service, or any dispute of any sort that might come between XuFa Ltd. and you, or its business partners and associates.</p>
            <p><strong>Disputes</strong></p>
            <p>Any dispute related in any way to your visit to this website or to products you purchase from us shall be arbitrated by state or federal court USA and you consent to exclusive jurisdiction and venue of such courts.</p>
            <p><strong>Comments, Reviews, and Emails</strong></p>
            <p>Visitors may post content as long as it is not obscene, illegal, defamatory, threatening, infringing of intellectual property rights, invasive of privacy or injurious in any other way to third parties. Content has to be free of software viruses, political campaign, and commercial solicitation.</p>
            <p>We reserve all rights (but not the obligation) to remove and/or edit such content. When you post your content, you grant name/email non-exclusive, royalty-free and irrevocable right to use, reproduce, publish, modify such content throughout the world in any media.</p>
            <p><strong>License and Site Access</strong></p>
            <p>We grant you a limited license to access and make personal use of this website. You are not allowed to download or modify it. This may be done only with written consent from us.</p><p><strong>User Account</strong></p>
            <p>If you are an owner of an account on this website, you are solely responsible for maintaining the confidentiality of your private user details (username and password). You are responsible for all activities that occur under your account or password.</p>
            <p>We reserve all rights to terminate accounts, edit or remove content and cancel orders in their sole discretion.</p>
        </div>
    </div>
    <!-- End Related Posts -->

    <!-- End Pagination -->
    <div class="g-mb-20"></div>
    <!-- Footer -->
    <footer class="g-bg-secondary">
        <div class="container">
            <?php require_once("footer.php"); ?>
        </div>
    </footer>
    <!-- End Footer -->

</main>

<div class="u-outer-spaces-helper"></div>
<!-- Youtube video modal window -->
<div id="yt_modal" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;">
    <button type="button" class="close pointer" onclick="Custombox.modal.close();$('iframe', $('#yt_modal')).remove();">
        <i class="hs-icon hs-icon-close"></i>
    </button>
    <div id="main_video_container"></div>
</div>
<?php require_once ('common_js.php'); ?>

</body>
</html>