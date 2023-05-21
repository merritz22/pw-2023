<nav>
    <ul>
        <li class="primary-nav">
        <img src="<?php echo($_APP['app']['ico-link']) ?>" alt="logo" />
        <a href="<?php echo($_APP['route']['accueil']) ?>"><?php echo($_APP['app']['name']) ?></a>
        </li>
        <li class="secondary-nav">
        <a href="<?php echo($_APP['route']['panier']) ?>">
            <i class="fas fa-shopping-cart"></i> PANIER
        </a>
        </li>
        <li class="secondary-nav">
            <a href="<?php echo($_APP['route']['features']) ?>">RESUME</a>
        <i class="fas fa-book" aria-hidden="true"></i>
        </li>
        <li class="secondary-nav">
        <a href="<?php echo($_APP['route']['a_propos']) ?>">A PROPOS</a>
        </li>

        <li class="secondary-nav">
            <a href="<?php echo($_APP['route']['femmes']) ?>">FEMMES</a>
            <i class="fas fa-female" aria-hidden="true"></i>
        </li>
        <li class="secondary-nav">
            <a href="<?php echo($_APP['route']['hommes']) ?>">HOMMES</a>
            <i class="fas fa-male" aria-hidden="true"></i>
        </li>
    </ul>
</nav>