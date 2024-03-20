<h1>Ini Halaman FAQ</h1>
<h3>Coba Session</h3>
<?php
                $session = session();

                $session->set('info', 'Test ini adalah session');

                echo $session->get('info');

                use CodeIgniter\I18n\Time;
?>
<h3>Coba Library Date and Time</h3>
<?php
                //Libary Date And Time
                $waktu= new Time('now', 'Asia/Jakarta', 'en_ID');
                echo $waktu;
        
                echo "<br>";
                helper('text');
                for ($i = 0; $i < 10; $i++) {
                    echo alternator('string one', 'string two');
                    echo "<br>";
                }
                ?>