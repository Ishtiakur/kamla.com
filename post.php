<?php include 'header.php'; ?>
    
    
<!-- ===========================================post section================================ -->    
<div class="container  main-container" >    
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>    
           <div class="col-md-10">
               <div id="postSection">
                 <img class="img-responsive" src="img/logo.jpg" style="height: 94px;width: 100px;margin-bottom: 5px">
               
                <div id="description">
                    <h2>Tell us what you need done</h2>
                    <p>Get free quotes from skilled freelancers within minutes, view profiles, ratings and portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.
                    </p>
                </div>
                <form>
                    <div class="form-group">
                        <label for="input-title">Post Title</label>
                        <input type="text" class="form-control" id="post-title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="input-description">Post Description</label>
                        <textarea class="form-control" type="textarea" id="description" placeholder="Write Post Description..." maxlength="140" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="input-catagory">Category</label>
                        <select id="category" class="form-control">
                        <option selected>Choose Category</option>
                        <option value="1">Computer</option>
                        <option value="2">House Worker</option>
                        <option value="3">Car</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="input-location">Location</label>
                        <select id="location" class="form-control">
                        <option selected>Choose Location</option>
                        <option value="1">Sylhet</option>
                        <option value="2">Dhaka</option>
                        <option value="3">Sunamgonj</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="budget">Estimate Budget</label>
                        <input type="text" class="form-control" id="estimate-budget" placeholder="Enter Budget">
                    </div>
                    <div class="form-group">
                        <label for="input-mobile">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number">
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-lg" id="mybtn">Post</button>
                </form>
            </div>
          </div>
          <div class="col-md-1"></div>    
        </div>
    </div>
       
       
</div>           

<?php  include 'footer.php'; ?>