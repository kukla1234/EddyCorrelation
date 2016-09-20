<!-- 
 * Description: Navigation bar for Eddy Correlation website
 *
 * @author    Elizabeth Kukla <elizabeth.kukla@gmail.com>
 * @date      03.09.16
 * @copyright All rights reserved.
 */
 -->

<nav class='berg_background-blue berg_max-width-800 berg_navbar'>
  <div class='berg_padding-left'>
    <img src="/berg/img/menu_icon.png" alt="Menu" class="berg_menu-icon" id="berg_menu-icon">
  </div>
</nav>

<div class='berg_hide berg_nav-dropdown berg_padding-left berg_background-blue berg_text-white' id='menu-dropdown'>
  <ul class='berg_nav-list'> 
    <a class='berg_text-white' href="/berg/"><li class='berg_nav-list-item'>Home</li></a>
    <a class='berg_text-white' href="/berg/principles/"><li class='berg_nav-list-item'>Principles</li></a>
    <a class='berg_text-white' href="/berg/publications"><li class='berg_nav-list-item'>Publications</li></a>
    <a class='berg_text-white' href="/berg/team"><li class='berg_nav-list-item'>Team</li class='berg_nav-list-item'></a>
    <a class='berg_text-white' href="/berg/gallery"><li class='berg_nav-list-item'>Gallery</li></a>
    <a class='berg_text-white' href="/berg/presentations"><li class='berg_nav-list-item'>Presentations</li></a>
    <a class='berg_text-white' href="/berg/weblinks"><li class='berg_nav-list-item'>Weblinks</li></a>

    <li class='berg_nav-list-divider'>Examples</li>

    <a class='berg_text-white' href="/berg/example1/"><li class='berg_nav-list-item'>Gulf of Mexico</li></a>
    <a class='berg_text-white' href="/berg/example2/"><li class='berg_nav-list-item'>Florida Reef</li></a>
    <a class='berg_text-white' href="/berg/example3/"><li class='berg_nav-list-item'>Florida Sediments</li ></a>
    <a class='berg_text-white' href="/berg/example4/"><li class='berg_nav-list-item'>Virginia Seagrass</li></a>
  </ul>
</div>

<div class="berg_page-header berg_max-width-800 berg_background-light-blue" >
  <h1 class='berg_text-white'>Aquatic Eddy Covariance Research Lab</h2>
  <h2 class='berg_text-white'>at University of Virginia</h3>
</div>
  <script src="/berg/js/jquery-3.1.0.js" type="text/javascript"></script>
  <script type="text/javascript">
     $('#berg_menu-icon').click(function() {
      $('#menu-dropdown').toggleClass('berg_hide');
    });
  </script>
 
