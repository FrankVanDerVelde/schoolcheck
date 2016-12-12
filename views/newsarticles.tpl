<H1 class="pageTitle"> Home </H1>
 

    <section style="text-align: center">    
            <ul class="pagination">
				{for $foo=1 to $total_number_newsarticles}
                   <li><a href="index.php?action=home&page_number={$foo}">{$foo}</a></li> 
               {/for}
            </ul>
    </section>

<!--
              <li><a href="#">«</a></li>
              <li><a href="?action=home&page_number=1">1</a></li>
              <li><a class="active" href="?action=home&page_number=2">2</a></li>
              <li><a href="?action=home&page_number=1">3</a></li>
              <li><a href="#">»</a></li>
-->