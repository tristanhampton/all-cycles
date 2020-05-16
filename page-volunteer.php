<?php get_header() ?>

<main class="container">
    <div class="wrapper">
        <h2>Volunteer</h2>
        <form action="link-to-formspree">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email">
            </div>

            <div class="form-group">
                <label for="pronouns">Pronouns</label>
                <input type="text" id="pronouns">
            </div>

            <div class="form-group full-width">
                <p>What roles are you interested in?</p>
                <div class="check-control">
                    <input type="checkbox" id="pickup">
                    <label for="roles">Donation Pickup/Dropoff</label>
                </div>
                <div class="check-control">
                    <input type="checkbox" id="events">
                    <label for="events">Event Planning</label>
                </div>
                <div class="check-control">
                    <input type="checkbox" id="promotions">
                    <label for="promotions">Promotional Planning</label>
                </div>
            </div>

            <div class="form-group full-width">
                <p>Do you have a vehicle that you might use as part of your volunteering role (ex. for pickup/drop off). This is not a requirement.</p>
                <div class="check-control">
                    <input type="radio" id="vehicle" name="vehicle">
                    <label for="vehicle">Yes</label>
                </div>
                <div class="check-control">
                    <input type="radio" id="vehicle" name="vehicle">
                    <label for="vehicle">No</label>
                </div>
            </div>

            <button role="submit">Volunteer!</button>
        </form>
    </div>
    <!-- Create form for volunteers to fill out -->
</main>

<?php get_footer() ?>