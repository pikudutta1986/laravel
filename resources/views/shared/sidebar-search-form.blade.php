<div class="search-form-container">
    <h2>Search Your Car</h2>
    <form action="" method="post">
        <div class="form-group">
            <label>Make: </label>
            <select class="form-control" name="make">
                <optio value="">Any Make</oprion>
                <option value="acura">ACURA</option>
                <option value="alfa-romeo">ALFA ROMEO</option>
                <option value="aston-martin">ASTON MARTIN</option>
                <option value="audi">AUDI</option>
                <option value="bentley">BENTLEY</option>
                <option value="bmw">BMW</option>
                <option value="buick">BUICK</option>
                <option value="cadillac">CADILLAC</option>
                <option value="chevrolet">CHEVROLET</option>
                <option value="chrysler">CHRYSLER</option>
            </select>
        </div>

        <div class="form-group">
            <label>Model: </label>
            <select class="form-control" name="model">
            <option value="cl">CL</option>
                <option value="ilx">ILX</option>
                <option value="integra">Integra</option>
                <option value="mdx">MDX</option>
                <option value="rdx">RDX</option>
                <option value="rl">RL</option>
                <option value="rlx">RLX</option>
                <option value="tl">TL</option>
                <option value="tlx">TLX</option>
                <option value="tsx">TSX</option>
            </select>
        </div>

        <div class="form-group">
            <label>Year: </label>
            <select class="form-control" name="model">
                <option value="2024">2024</option>
                <option value="2023">2023</option>
            </select>
        </div>

        <div class="form-group">
            <label>Body style: </label>
            <select class="form-control" name="model">
                <option value="SUV">SUV</option>
                <option value="Hatchback">Hatchback</option>
            </select>
        </div>
        
        <div data-role="rangeslider">
            <label for="price-min">Price:</label>
            <input type="range" name="price-min" id="price-min" value="1000" min="0" max="100000">
            <label for="price-max">Price:</label>
            <input type="range" name="price-max" id="price-max" value="100000" min="0" max="100000">
        </div>
        <input type="submit" class="site-secondary-button" value="Search" />
    </form>
</div>