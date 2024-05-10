@extends('veskai.template.main')
@section('content')

<!-- ========Game Details Section Starts Here======== -->
<div class="padding-top padding-bottom" style="background-image: url('https://i.pinimg.com/originals/d0/e0/e2/d0e0e259bf0aba4da742bedff1d4b8a5.gif');">
    <div class="form-container">
        <form action="{{route('submit.unban.discord')}}" method="POST" class="unban-form">
            @csrf
            <label for="username" class="form-label">Discord Username:</label>
            <input type="text" id="username" name="username" class="form-input" required>
            <br>
            <label for="reason" class="form-label">Reason</label>
            <input type="text" id="reason" name="reason" class="form-input" required>
            <br>
            <label for="motivation" class="form-label">Motivation for Unbanned:</label>
            <textarea id="motivation" name="motivation" rows="4" class="form-textarea" required></textarea>
            <br>
            <button type="submit" name="submit" class="form-button">Submit</button>
        </form>
    </div>
</div>
</div>
    <!-- ========Game Details Section Ends Here======== -->

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

@endsection
