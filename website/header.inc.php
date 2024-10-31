<style>
   .header-div {
       display: flex;
       align-items: center;
   }
   .header-div img {
       width: 35px;
       height: 35px;
       margin-right: 5px;
   }
   .header-div h1,
   .header-div h2 {
       margin: 0;
   }
</style>
<div class="header-div">
   <div>
       <h1>Tech City</h1>
       <h2>Inventory Management</h2>
   </div>
</div>
<style>
 form[name="login"] {
   display: grid;
   grid-template-columns: 100px 1fr;
   gap: 10px 5px;
   align-items: center;
   max-width: 300px;
 }
 form[name="login"] label {
   text-align: right;
   padding-right: 5px;
 }
 form[name="login"] input[type="text"],
 form[name="login"] input[type="password"] {
   width: 100%;
 }
 form[name="login"] input[type="submit"] {
   grid-column: 2;
   justify-self: start;
 }
</style>
