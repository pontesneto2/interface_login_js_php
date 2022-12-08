<?php

                          $idiomas = array( 'br'  => 'Português (Brasil)','es' => 'Espanhol (Espanha)','fr' => 'Francês (França)','en' => 'Inglês (Estados Unidos)');

                              echo "<select name='countries' id='countries' style='width:280px'>";
                          foreach($idiomas as $key => $value){
                              
                              if($_GET['lang'] == $key){

                                  echo "<option value='../login/login.php?lang=".$key."' data-image='images/msdropdown/icons/blank.gif' selected data-imagecss='flag ".$key."' data-title='".$value."'>$value</option>";

                              }else{

                                  echo "<option value='../login/login.php?lang=".$key."' data-image='images/msdropdown/icons/blank.gif' data-imagecss='flag ".$key."' data-title='".$value."'>$value</option>";
                              
							  }


                          }
                          echo "</select>";
						?>
