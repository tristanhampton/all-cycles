<main class="volunteer">
    <h2>Volunteer</h2>
    <!-- Create form for volunteers to fill out -->
    <form action="POST">
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

        <div class="form-group">
            <p>What roles are you interested in?</p>
            <input type="check" id="pickup">
            <label for="roles">Donation Pickup/Dropoff</label>
            <input type="check" id="events">
            <label for="events">Event Planning</label>
            <input type="check" id="promotions">
            <label for="promotions">Promotional Planning</label>
        </div>

        <div class="form-group">
            <p>Do you have a vehicle that you might use as part of your volunteering role (ex. for pickup/drop off). This is not a requirement.</p>
            <input type="radio" id="vehicle">
            <label for="vehicle">Yes</label>
            <input type="radio" id="vehicle">
            <label for="vehicle">No</label>
        </div>

        <button role="submit">Volunteer!</button>
    </form>
</main>