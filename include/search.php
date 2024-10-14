<div class="col-lg-12">
    <form id="search-form" name="gs" method="submit" role="search" action="#">
        <div class="row">
            <div class="col-lg-3 align-self-center">
                <fieldset>
                    <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                        <option selected>All Areas</option>
                        <option value="New Village">New Village</option>
                        <option value="Old Town">Old Town</option>
                        <option value="Modern City">Modern City</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-lg-3 align-self-center">
                <fieldset>
                    <input type="address" name="address" class="searchText" placeholder="Enter a location" autocomplete="on" required>
                </fieldset>
            </div>
            <div class="col-lg-3 align-self-center">
                <fieldset>
                    <select name="price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                        <option selected>Price Range</option>
                        <option value="$100 - $250">$100 - $250</option>
                        <option value="$250 - $500">$250 - $500</option>
                        <option value="$500 - $1000">$500 - $1,000</option>
                        <option value="$1000+">$1,000 or more</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset>
                    <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                </fieldset>
            </div>
        </div>
    </form>