<ul id="slide-out-left" class="side-nav collapsible" data-collapsible="accordion">
        <li><a href="<?php echo htmlspecialchars("?page=home");?>"><i class="fa fa-home"></i>Home</a></li>
        <?php
        if(isset($_SESSION['session_player'])){
        ?>
        <li><a href="<?php echo htmlspecialchars("?page=meuClube");?>"><i class="fa fa-star"></i>Seu Clube</a></li>
        <li><a href="<?php echo htmlspecialchars("?page=player");?>"><i class="fa fa-user"></i>Seu perfil</a></li>
        <?php }else{ ?>
        <li><a href="<?php echo htmlspecialchars("?page=login");?>"><i class="fa fa-sign-in"></i>Login</a></li>
        <li><a href="<?php echo htmlspecialchars("?page=registro");?>"><i class="fa fa-user-plus"></i>Register</a></li>
        <?php } ?>
        <li><a href="<?php echo htmlspecialchars("?page=clubes");?>"><i class="fa fa-star"></i>Clubes</a></li>
        <li><a href="<?php echo htmlspecialchars("?page=players");?>"><i class="fa fa-users"></i>Jogadores</a></li> 
        <li><a href="<?php echo htmlspecialchars("?page=contato");?>"><i class="fa fa-envelope"></i>Contato</a></li>    
    </ul>