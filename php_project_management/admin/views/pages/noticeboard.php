 <div class="container-fluid">
     <div class="nk-content-inner">
         <div class="nk-content-body">
             <div class="nk-block-head nk-block-head-sm">
                 <div class="nk-block-between">
                     <div class="nk-block-head-content">
                         <h3 class="nk-block-title page-title">Notice Board</h3>
                         <div class="nk-block-des text-soft">
                             <p>You have total 95 notice.</p>
                         </div>
                     </div><!-- .nk-block-head-content -->
                     <div class="nk-block-head-content">
                         <div class="toggle-wrap nk-block-tools-toggle">
                             <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                             <div class="toggle-expand-content" data-content="pageMenu">
                                 <ul class="nk-block-tools g-3">
                                     <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                     <li class="nk-block-tools-opt">
                                         <div class="drodown">
                                             <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                 <ul class="link-list-opt no-bdr">
                                                     <li><a data-bs-toggle="modal" href="#addNotice"><span>Add Notice</span></a></li>
                                                     <li><a href="#"><span>Import Notice</span></a></li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                         </div><!-- .toggle-wrap -->
                     </div><!-- .nk-block-head-content -->
                 </div><!-- .nk-block-between -->
             </div><!-- .nk-block-head -->
             <div class="nk-block">
                 <div class="card card-bordered card-stretch">
                     <div class="card-inner-group">
                         <div class="card-inner position-relative card-tools-toggle">
                             <div class="card-title-group">
                                 <div class="card-tools">
                                     <div class="form-inline flex-nowrap gx-3">
                                         <div class="form-wrap w-150px">
                                             <select class="form-select js-select2 js-select2-sm" data-search="off" data-placeholder="Bulk Action">
                                                 <option value="">Bulk Action</option>
                                                 <option value="email">Send Email</option>
                                                 <option value="delete">Delete</option>
                                             </select>
                                         </div>
                                         <div class="btn-wrap">
                                             <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                             <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                         </div>
                                     </div><!-- .form-inline -->
                                 </div><!-- .card-tools -->
                                 <div class="card-tools me-n1">
                                     <ul class="btn-toolbar gx-1">
                                         <li>
                                             <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                         </li><!-- li -->
                                         <li class="btn-toolbar-sep"></li><!-- li -->
                                         <li>
                                             <div class="toggle-wrap">
                                                 <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                 <div class="toggle-content" data-content="cardTools">
                                                     <ul class="btn-toolbar gx-1">
                                                         <li class="toggle-close">
                                                             <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                         </li><!-- li -->
                                                         <li>
                                                             <div class="dropdown">
                                                                 <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                     <div class="dot dot-primary"></div>
                                                                     <em class="icon ni ni-filter-alt"></em>
                                                                 </a>
                                                                 <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                     <div class="dropdown-head">
                                                                         <span class="sub-title dropdown-title">Filter Users</span>
                                                                         <div class="dropdown">
                                                                             <a href="#" class="btn btn-sm btn-icon">
                                                                                 <em class="icon ni ni-more-h"></em>
                                                                             </a>
                                                                         </div>
                                                                     </div>
                                                                     <div class="dropdown-body dropdown-body-rg">
                                                                         <div class="row gx-6 gy-3">
                                                                             <div class="col-6">
                                                                                 <div class="form-group">
                                                                                     <label class="overline-title overline-title-alt">Topic</label>
                                                                                     <select class="form-select js-select2 js-select2-sm">
                                                                                         <option value="any">Any Topic</option>
                                                                                         <option value="holiday">Holiday</option>
                                                                                     </select>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="col-6">
                                                                                 <div class="form-group">
                                                                                     <label class="overline-title overline-title-alt">Status</label>
                                                                                     <select class="form-select js-select2 js-select2-sm">
                                                                                         <option value="any">Any Status</option>
                                                                                         <option value="active">Active</option>
                                                                                         <option value="pending">Pending</option>
                                                                                         <option value="published">Published</option>
                                                                                     </select>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="col-12">
                                                                                 <div class="form-group">
                                                                                     <button type="button" class="btn btn-secondary">Filter</button>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="dropdown-foot between">
                                                                         <a class="clickable" href="#">Reset Filter</a>
                                                                         <a href="#">Save Filter</a>
                                                                     </div>
                                                                 </div><!-- .filter-wg -->
                                                             </div><!-- .dropdown -->
                                                         </li><!-- li -->
                                                         <li>
                                                             <div class="dropdown">
                                                                 <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                     <em class="icon ni ni-setting"></em>
                                                                 </a>
                                                                 <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                     <ul class="link-check">
                                                                         <li><span>Show</span></li>
                                                                         <li class="active"><a href="#">10</a></li>
                                                                         <li><a href="#">20</a></li>
                                                                         <li><a href="#">50</a></li>
                                                                     </ul>
                                                                     <ul class="link-check">
                                                                         <li><span>Order</span></li>
                                                                         <li class="active"><a href="#">DESC</a></li>
                                                                         <li><a href="#">ASC</a></li>
                                                                     </ul>
                                                                 </div>
                                                             </div><!-- .dropdown -->
                                                         </li><!-- li -->
                                                     </ul><!-- .btn-toolbar -->
                                                 </div><!-- .toggle-content -->
                                             </div><!-- .toggle-wrap -->
                                         </li><!-- li -->
                                     </ul><!-- .btn-toolbar -->
                                 </div><!-- .card-tools -->
                             </div><!-- .card-title-group -->
                             <div class="card-search search-wrap" data-search="search">
                                 <div class="card-body">
                                     <div class="search-content">
                                         <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                         <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by Topic">
                                         <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                     </div>
                                 </div>
                             </div><!-- .card-search -->
                         </div><!-- .card-inner -->
                         <div class="card-inner p-0">
                             <div class="nk-tb-list nk-tb-ulist is-compact">
                                 <div class="nk-tb-item nk-tb-head">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid">
                                             <label class="custom-control-label" for="uid"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col"><span class="sub-text">Topic</span></div>
                                     <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Description</span></div>
                                     <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                     <div class="nk-tb-col tb-col-md"><span class="sub-text">Expiry Date</span></div>
                                     <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Publish Date</span></div>
                                     <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                     <div class="nk-tb-col nk-tb-col-tools text-end">
                                         <div class="dropdown">
                                             <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                             <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                 <ul class="link-tidy sm no-bdr">
                                                     <li>
                                                         <div class="custom-control custom-control-sm custom-checkbox">
                                                             <input type="checkbox" class="custom-control-input" id="vri">
                                                             <label class="custom-control-label" for="vri">Date</label>
                                                         </div>
                                                     </li>
                                                     <li>
                                                         <div class="custom-control custom-control-sm custom-checkbox">
                                                             <input type="checkbox" class="custom-control-input" id="st">
                                                             <label class="custom-control-label" for="st">Status</label>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid1">
                                             <label class="custom-control-label" for="uid1"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Holiday</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>Sorem kpsum lolor, adipisicing elit. At provident ipsum incidunt tota.</span>
                                         <span class="m-1"><a href="#" class="btn text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>10 Feb 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>12 Jun 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>14 Jan 2021</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-success badge badge-dot">Published</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid2">
                                             <label class="custom-control-label" for="uid2"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Wild Life</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>Adipisicing elit. At provident ipsum incidunt tota ipsum incidunt tota.</span>
                                         <span class="m-1"><a href="#" class="btn  text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>10 Feb 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>15 March 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>01 Jan 2021</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-warning badge badge-dot">Pending</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid3">
                                             <label class="custom-control-label" for="uid3"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Womens Day</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>Ducimus sapiente officiis velit nisi, ullam cupiditate velit nisi, ullam cupiditate.</span>
                                         <span class="m-1"><a href="#" class="btn text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>09 Feb 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>08 March 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>4 Dec 2020</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-danger badge badge-dot">Delay</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid4">
                                             <label class="custom-control-label" for="uid4"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Social Justic</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>Adipisicing elit. At provident ipsum incidunt tota ipsum incidunt tota.</span>
                                         <span class="m-1"><a href="#" class="btn  text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>20 March 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>03 April 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>44 October 2020</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-warning badge badge-dot">Pending</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid5">
                                             <label class="custom-control-label" for="uid5"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Holiday</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>Ducimus sapiente officiis velit nisi, ullam cupiditate velit nisi, ullam cupiditate.</span>
                                         <span class="m-1"><a href="#" class="btn text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>10 Feb 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>10 Feb 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>14 Jan 2021</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-danger badge badge-dot">Delay</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid6">
                                             <label class="custom-control-label" for="uid6"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Presss Freedom</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>Sorem kpsum lolor, adipisicing elit. At provident ipsum incidunt tota.</span>
                                         <span class="m-1"><a href="#" class="btn text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>11 April 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>18 June 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>10 Feb 2021</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-success badge badge-dot">Published</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid7">
                                             <label class="custom-control-label" for="uid7"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Ovarian Cancer</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>Adipisicing elit. At provident ipsum incidunt tota ipsum incidunt tota.</span>
                                         <span class="m-1"><a href="#" class="btn  text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>27 Jan 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>24 Feb 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>15 Nov 2020</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-warning badge badge-dot">Pending</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid8">
                                             <label class="custom-control-label" for="uid8"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Liberation Day</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>Ducimus sapiente officiis velit nisi, ullam cupiditate velit nisi, ullam cupiditate.</span>
                                         <span class="m-1"><a href="#" class="btn text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>19 May 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>10 July 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>14 Dec 2020</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-danger badge badge-dot">Delay</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid9">
                                             <label class="custom-control-label" for="uid9"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Youth’s Day</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>Sorem kpsum lolor, adipisicing elit. At provident ipsum incidunt tota.</span>
                                         <span class="m-1"><a href="#" class="btn text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>10 Jan 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>05 March 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>24 Sep 2020</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-success badge badge-dot">Published</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                                 <div class="nk-tb-item">
                                     <div class="nk-tb-col nk-tb-col-check">
                                         <div class="custom-control custom-control-sm custom-checkbox notext">
                                             <input type="checkbox" class="custom-control-input" id="uid10">
                                             <label class="custom-control-label" for="uid10"></label>
                                         </div>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span>Charity</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span> Ashyum la vanso Ducimus sapiente officiis velit nisi, ullam cupiditate</span>
                                         <span class="m-1"><a href="#" class="btn text-info">View Details</a></span>
                                     </div>
                                     <div class="nk-tb-col tb-col-sm">
                                         <span>19 April 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-md">
                                         <span>10 May 2020</span>
                                     </div>
                                     <div class="nk-tb-col tb-col-xxl">
                                         <span>13 Aug 2020</span>
                                     </div>
                                     <div class="nk-tb-col">
                                         <span class="tb-status bg-danger badge badge-dot">Delay</span>
                                     </div>
                                     <div class="nk-tb-col nk-tb-col-tools">
                                         <ul class="nk-tb-actions gx-2">
                                             <li class="nk-tb-action-hidden">
                                                 <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                     <em class="icon ni ni-mail-fill"></em>
                                                 </a>
                                             </li>
                                             <li>
                                                 <div class="drodown">
                                                     <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                     <div class="dropdown-menu dropdown-menu-end">
                                                         <ul class="link-list-opt no-bdr">
                                                             <li><a data-bs-toggle="modal" href="#editNotice"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                             <li><a data-bs-toggle="modal" href="#deleteNotice"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div><!-- .nk-tb-item -->
                             </div><!-- .nk-tb-list -->
                         </div><!-- .card-inner -->
                         <div class="card-inner">
                             <ul class="pagination justify-content-center justify-content-md-start">
                                 <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                 <li class="page-item"><a class="page-link" href="#">6</a></li>
                                 <li class="page-item"><a class="page-link" href="#">7</a></li>
                                 <li class="page-item"><a class="page-link" href="#">Next</a></li>
                             </ul><!-- .pagination -->
                         </div><!-- .card-inner -->
                     </div><!-- .card-inner-group -->
                 </div><!-- .card -->
             </div><!-- .nk-block -->
         </div>
     </div>
 </div>