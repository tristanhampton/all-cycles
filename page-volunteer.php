<?php get_header() ?>

<main class="container">
    <div class="wrapper">
        <h2>Volunteer</h2>
        <div class="error-messages"></div>

        <form action="https://formspree.io/xwkrqqro" method="POST">
            <input type="hidden" name="_subject" value="New Volunteer" />
            <div class="form-group">
                <label for="first_name" class="required">First Name</label>
                <input type="text" name="First Name" id="first_name" >
            </div>

            <div class="form-group">
                <label for="last_name" class="required">Last Name</label>
                <input type="text" name="Last Name" id="last_name">
            </div>

            <div class="form-group">
                <label for="email" class="required">Email</label>
                <input type="email" name="Email" id="email">
            </div>

            <div class="form-group">
                <label for="pronouns">Pronouns</label>
                <input type="text" name="Pronouns" id="pronouns">
            </div>

            <div class="form-group full-width" id="roles">
                <p class="required">What roles are you interested in?</p>
                <div class="check-control">
                    <input type="checkbox" id="pickup" name="Donation Pickup/Dropoff">
                    <label for="roles">Donation Pickup/Dropoff</label>
                </div>
                <div class="check-control">
                    <input type="checkbox" id="events" name="Event Planning">
                    <label for="events">Event Planning</label>
                </div>
                <div class="check-control">
                    <input type="checkbox" id="promotions" name="Promotional Planning">
                    <label for="promotions">Promotional Planning</label>
                </div>
            </div>

            <div class="form-group full-width" id="vehicle">
                <p class="required">Do you have a vehicle that you might use as part of your volunteering role (ex. for pickup/drop off). This is not a requirement.</p>
                <div class="check-control">
                    <input type="radio" id="vehicle" name="vehicle" value="Has vehicle">
                    <label for="vehicle">Yes</label>
                </div>
                <div class="check-control">
                    <input type="radio" id="vehicle" name="vehicle" value="No vehicle">
                    <label for="vehicle">No</label>
                </div>
            </div>

            <div class="submit-button">
                <div class="clickable"></div>
                <button role="submit" disabled>Volunteer!</button>
            </div>
        </form>

    </div>
    <!-- Create form for volunteers to fill out -->
</main>

<?php get_footer() ?>