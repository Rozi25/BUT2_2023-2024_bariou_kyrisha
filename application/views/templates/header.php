<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="" class="logo">dicatlon</a>
            <form>
                <div class="searchForm">
                    <input type="search" class="mySearch" name="q"  placeholder="Rechercher un produit…" />
                    <button>Search</button>
                </div>
            </form>
            <div class="icons">
                <a href="" class="likeIcon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path d="M31.6668 23.8333C34.1502 21.4 36.6668 18.4833 36.6668 14.6667C36.6668 12.2355 35.7011 9.90394 33.982 8.18485C32.2629 6.46577 29.9313 5.5 27.5002 5.5C24.5668 5.5 22.5002 6.33333 20.0002 8.83333C17.5002 6.33333 15.4335 5.5 12.5002 5.5C10.069 5.5 7.73743 6.46577 6.01835 8.18485C4.29927 9.90394 3.3335 12.2355 3.3335 14.6667C3.3335 18.5 5.8335 21.4167 8.3335 23.8333L20.0002 35.5L31.6668 23.8333Z" stroke="#C3272C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a href="" class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="67" height="64" viewBox="0 0 67 64" fill="none">
                <rect y="0.5" width="67" height="63" rx="8" />
                <mask id="mask0_42_187" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="14" y="12" width="40" height="40">
                    <path d="M33.5 28.1111C34.3937 28.1111 35.2787 27.9351 36.1044 27.5931C36.9301 27.2511 37.6803 26.7498 38.3123 26.1178C38.9442 25.4859 39.4455 24.7356 39.7875 23.9099C40.1295 23.0842 40.3056 22.1993 40.3056 21.3056C40.3056 20.4118 40.1295 19.5269 39.7875 18.7012C39.4455 17.8755 38.9442 17.1253 38.3123 16.4933C37.6803 15.8613 36.9301 15.3601 36.1044 15.018C35.2787 14.676 34.3937 14.5 33.5 14.5C31.6951 14.5 29.964 15.217 28.6877 16.4933C27.4115 17.7696 26.6944 19.5006 26.6944 21.3056C26.6944 23.1105 27.4115 24.8415 28.6877 26.1178C29.964 27.3941 31.6951 28.1111 33.5 28.1111ZM16 48.3333C16 48.9777 16.5223 49.5 17.1667 49.5H49.8333C50.4777 49.5 51 48.9777 51 48.3333C51 43.9778 51 41.8 50.1522 40.1356C49.4066 38.6721 48.2168 37.4823 46.7533 36.7367C45.0889 35.8889 42.9111 35.8889 38.5556 35.8889H28.4444C24.0889 35.8889 21.9111 35.8889 20.2467 36.7367C18.7832 37.4823 17.5934 38.6721 16.8478 40.1356C16 41.8 16 43.9778 16 48.3333Z" fill="white" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </mask>
                <g mask="url(#mask0_42_187)">
                    <path d="M10.1665 16.6668C10.1665 12.2485 13.7482 8.66675 18.1665 8.66675H48.8332C53.2514 8.66675 56.8332 12.2485 56.8332 16.6667V47.3334C56.8332 51.7517 53.2514 55.3334 48.8332 55.3334H18.1665C13.7482 55.3334 10.1665 51.7517 10.1665 47.3334V16.6668Z" fill="#C3272C"/>
                </g>
                </svg>
                </a>
            </div>
        </nav>
        <div class="categorieHeader">
            <ul>
                <?php  foreach($categorie as $key => $value): ?>
                <li> <a href="listProduit/<?php echo $value['categorie'] ?>"><?php echo $value['categorie'] ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
        
    </header>
