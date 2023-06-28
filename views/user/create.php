<div class="container">
    <h1>
        Backend/Full-stack recruitment task
    </h1>
    <hr>
    <h2>Add User</h2>
    <a style="margin:10px 0;" class="button" href="<?=BASE_URL?>/user/index">Back</a>
    <form method="POST" action="<?= BASE_URL ?>/user/createFill">
        <div class="form-input">
            <label>
                Name
                <input name="Name" required type="text" placeholder="Name">
            </label>
        </div>
        <div class="form-input">
            <label>
                Username
                <input name="Username" required type="text" placeholder="Username">
            </label>
        </div>
        <div class="form-input">
            <label>
                Email
                <input name="Email" required type="email" placeholder="Email">
            </label>
        </div>
        <div class="grid-1-2">
            <div class="form-input">
                <label>
                    Address street
                    <input name="Address[street]" required type="text" placeholder="Street">
                </label>
            </div>
            <div class="form-input">
                <label>
                    Address suite
                    <input name="Address[suite]" required type="text" placeholder="Suite">
                </label>
            </div>
        </div>
        <div class="grid-1-2">
            <div class="form-input">
                <label>
                    Address city
                    <input name="Address[city]" required type="text" placeholder="City">
                </label>
            </div>
            <div class="form-input">
                <label>
                    Address zipcode
                    <input name="Address[zipcode]" required type="text" placeholder="Zipcode">
                </label>
            </div>
        </div>
        <div class="grid-1-2">
            <div class="form-input">
                <label>
                    Address geo lat
                    <input name="Address[geo][lat]" required type="number" placeholder="Lat">
                </label>
            </div>
            <div class="form-input">
                <label>
                    Address geo lng
                    <input name="Address[geo][lng]" required type="number" placeholder="Lng">
                </label>
            </div>
        </div>
        <div class="form-input">
            <label>
                Phone
                <input name="Phone" required type="text" placeholder="Phone">
            </label>
        </div>
        <div class="form-input">
            <label>
                Website
                <input name="Website" required type="text" placeholder="Website">
            </label>
        </div>
        <div class="grid-1-3">
            <div class="form-input">
                <label>
                    Company Name
                    <input name="Company[name]" required type="text" placeholder="Company name">
                </label>
            </div>
            <div class="form-input">
                <label>
                    Company catch phrase
                    <input name="Company[catchPhrase]" required type="text" placeholder="Company catch phrase">
                </label>
            </div>
            <div class="form-input">
                <label>
                    Company bs
                    <input name="Company[bs]" required type="text" placeholder="Company bs">
                </label>
            </div>
        </div>
        <hr>
        <button class="button" type="submit">Save</button>
    </form>
</div>
