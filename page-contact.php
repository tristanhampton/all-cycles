<?php get_header() ?>
<main class="container">
    <h2>Contact Us!</h2>
    <form action="link-to-formspree">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>

        <button role="submit">Submit</button>
    </form>
</main>

<?php get_footer() ?>