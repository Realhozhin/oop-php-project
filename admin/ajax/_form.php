<section class="col-8 offset-2" style="background-color: #c5e8ef;border-radius: 20px;">
    <section class="col-6 offset-3">
    </br>
        <h1 style="text-align: center">contact with us</h1>
    </br>
    </br>
        <form action="admin/ajax/insertajax.php" method="post" class="was-validated" id="contact">
            <div class="mb-3 mt-3">
                <label for="fullname" class="form-label">fullname</label>
                <input type="text" class="form-control" id="fullname" placeholder="Enter fullname" name="fullname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                 <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                 <div class="valid-feedback">Valid.</div>
                 <div class="invalid-feedback">Please fill out this field.</div>
             </div>
             <div class="mb-3">
                 <label for="comment" class="form-label">comment</label>
                 <textarea type="text" class="form-control" id="uname" placeholder="Enter comment" rows="4" name="comment" style="resize: none"></textarea>
             </div>
             <button type="submit" value="submit" class="btn btn-primary">Submit</button>
         </form>
     </br>
     </br>
     </section>
 </section>