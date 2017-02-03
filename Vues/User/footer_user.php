<?php echo(' <footer>
                <nav>
                    <ul>
                        <li><a class="contact_footer">Mail : '); $reponse = $db -> query('SELECT contenu FROM domisep_infos WHERE nom="mail"');$mail=$reponse->fetch();echo "$mail[0]"; echo('</a></li>
                        <li>|</li>
                        <li><a href="mentionlegal.php">Mentions légales</a></li>
                        <li>|</li>
                        <li><a>Téléphone : '); $reponse2 = $db -> query('SELECT contenu FROM domisep_infos WHERE nom="tel"');$tel=$reponse2->fetch();echo "$tel[0]"; echo('</a></li>                        
                    <div id=social>
                        <ul>
                        <li><a href="../../Styles/image/facebook.png"><img src="../../Styles/image/facebook.png" alt="Facebook" title="Facebook"/></li>
                        <li><a href="../../Styles/image/twitter.png"><img src="../../Styles/image/twitter.png" alt="Twitter" title="Twitter"/></li>
                        <li><a href="../../Styles/image/linkedin.png"><img src="../../Styles/image/linkedin.png" alt="Linkedin" title="Linkedin"/></li>
                        </ul>
                    </div>
                    </ul>
                </nav>
            </footer>');
?>