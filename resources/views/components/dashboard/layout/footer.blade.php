 <footer class="pc-footer">
     <div class="footer-wrapper container-fluid">
         <div class="row">
             <div class="col my-1">
                 <p class="m-0">{{ config('app.name') }} © {{ date('Y') }} All Rights Reserved</p>
             </div>
             <div class="col-auto my-1">
                 <ul class="list-inline footer-link mb-0">
                     <li class="list-inline-item"><a href="{{ route('dashboard') }}">Home</a></li>
                 </ul>
             </div>
         </div>
     </div>
 </footer>
