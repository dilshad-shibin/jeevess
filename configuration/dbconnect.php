                        <?php
                                
                                $server             ="localhost";
                                $username               ="jeevess";
                                $password               ="LkNN3b*47eSG";
                                $db_name                ="jeevess";
                                $connect                =mysqli_connect($server,$username,$password,$db_name);
                                
                                if (mysqli_connect_errno()) {
                                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        exit();
                                }

                        ?>