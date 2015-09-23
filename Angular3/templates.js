<script type="text/ng-template" id="add.html">
         <h4>Add Phone</h4>
      </script> 

<script type="text/ng-template" id="display.html">
         <h4> Display Phones on Sale</h4>
         <div ng-controller = "displayController">

            <p>Shop Name or Phone Name: <input type = "text" ng-model = "search"></p>

            <p>You serched for {{search}}</p>


            <h4>Shop Results</h4>
         
         <table>
            <tr>
               <th>Image</th>
               <th>Shop Name</th>
               <th>Phone Name</th>
               <th>Price</th>
            </tr>

            <tr ng-repeat = "phone in phones | filter: search"> 
               <td><img src={{phone.img}}></td>
               <td>{{phone.phoneName}}</td>
               <td>{{phone.shopName}}</td>
               <td>{{phone.price}}</td>
            </tr>
         </table>
      </div>


      </script>


      <script type="text/ng-template" id="review.html">
         <h4>Review</h4>


         <div ng-controller="reviewController" class="row">
           <div class="col-sm-8">
               <phone name = "Sony"></phone>

               <h5>Comments</h5>
               <table class="reviews">

                  <tr ng-repeat = "review in reviews">

                     <td><p><b>Name:</b> {{review.name}} </br>
                        <b>Email:</b> {{review.email}} </br>
                        <b>Comment:</b> {{review.comment}}
                     </p> </td>
                     
                  </tr>
               </table>

           </div>
           <div class="col-sm-4">
               <form role="form"  name="reviewForm" novalidate>
                  <p>Name:<br>
                     <input class="form-control" type="text" name="user" ng-model="user" required>
                     <span style="color:red" ng-show="reviewForm.user.$dirty && reviewForm.user.$invalid">
                        <span ng-show="reviewForm.user.$error.required">Username is required.</span>
                     </span>
                  </p>

                  <p>Email:<br>
                     <input class="form-control" type="email" name="email" ng-model="email" required>
                     <span style="color:red" ng-show="reviewForm.email.$dirty && reviewForm.email.$invalid">
                        <span ng-show="reviewForm.email.$error.required">Email is required.</span>
                        <span ng-show="reviewForm.email.$error.email">Invalid email address.</span>
                     </span>
                  </p>

                  <p>Review:<br>
                     <textarea rows="4" class="form-control" type="text" name="comment" ng-model="comment" required></textarea>
                     <span style="color:red" ng-show="reviewForm.comment.$dirty && reviewForm.comment.$invalid">
                        <span ng-show="reviewForm.comment.$error.required">Comment required.</span>
                     </span>
                  </p>

                  <p>
                  <input class="btn btn-success" type="submit" ng-click="submitReview()"
                  ng-disabled="reviewForm.user.$dirty && reviewForm.user.$invalid ||  
                  reviewForm.email.$dirty && reviewForm.email.$invalid  ||  reviewForm.comment.$dirty && reviewForm.comment.$invalid">
                  </p>
               </form>

               <div>
                  <h4>Preview</h4>
                  <p><b>Name:</b> {{user}}</p>
                  <p><b>Email:</b> {{email}}</p>
                  <p><b>Comment:</b> {{comment}}</p>  
               </div>
           </div>
         </div>
      </script>