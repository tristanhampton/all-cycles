<?php get_header() ?>
<main class="container">
    <div class="wrapper">
        <h2>Contact Us!</h2>
        <div class="error-messages"></div>
        <form action="https://formspree.io/moqklllv" method="POST">
            <input type="hidden" name="_subject" value="New message!" />
            <div class="form-group">
                <label for="name" class="required">Name</label>
                <input type="text" id="name" name="Name">
            </div>

            <div class="form-group">
                <label for="email" class="required">Email</label>
                <input type="email" id="email" name="Email">
            </div>

            <div class="form-group textarea">
                <label for="message" class="required">Message</label>
                <textarea name="Message" id="message" cols="30" rows="10"></textarea>
            </div>

            <div class="submit-button">
                <div class="clickable"></div>
                <button role="submit" disabled>Submit</button>
            </div>
        </form>

    </div>
</main>

<?php get_footer() ?>