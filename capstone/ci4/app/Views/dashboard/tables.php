<?php
// Collect all unique plant types
$plantTypes = array_unique(array_column($plants, 'PlantType'));
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Tables - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="admin/theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="admin/theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="admin/theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="admin/theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="admin/theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="admin/theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="admin/theme-assets/images/logo/naujan.png"/>
              <h3 class="brand-text">Naujan GreenHouse</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="dash"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class="nav-item" id="charts-dropdown" style="position: relative;"><a href="charts" style="display: block;"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
          </li>
          <li class=" nav-item"><a href="cards"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Drought Monitoring</span></a>
          </li>
          <li class=" nav-item"><a href="nutrients"><i class="ft-box"></i><span class="menu-title" data-i18n="">PH Nutrients</span></a>
          <li class=" nav-item"><a href="sensors"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Sensors</span></a>
          </li>
          </li>
          <li class=" nav-item"><a href="typography"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Typography</span></a>
          </li>
          <li class=" active"><a href="tables"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
          </li>
          <li class=" nav-item"><a href="form-elements"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Form Elements</span></a>
          </li>
          <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
          </li>
        </ul>
      </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank">Download PRO!</a>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Tables</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dash">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Tables
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
					<!-- Basic Tables start -->
					<div class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List of Planted Plants</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                    <p class="card-text">
    <?php if ($tableInfo): ?>
        <?php foreach ($tableInfo as $table): ?>
            <div class="card-content">
                <div class="card-body">
                    <p class="card-text"><?php echo $table['table_info']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</p>

<select id="plantTypeDropdown" style="display: none;"></select>                      
<br>
                        <div class="table-responsive">
                        <br>
                        <table id="plantTable" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Plant Name</th>
                                        <th>Plant Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if($plants): ?>
        <?php foreach($plants as $row) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><a href="#" onclick="openPlantModal('<?php echo $row['PlantName']; ?>', '<?php echo $row['PlantType']; ?>', '<?php echo $row['PlantDesc']; ?>', '<?php echo $row['WaterCapacity']; ?>', '<?php echo $row['SoilType']; ?>', '<?php echo $row['DaystoHarvest']; ?>', '<?php echo $row['HarvestStatus']; ?>')"><?php echo $row['PlantName']; ?></a></td>
                <td><?php echo $row['PlantType']; ?></td>
                <td>


<!-- Button to trigger updateHarvestStatus function -->
<button onclick="updateHarvestStatus(<?= $row['id'] ?>)" class="btn btn-success btn-sm">Harvested</button>

</td>
            <td> <a href="#" onclick="updateEditForm(
    '<?php echo htmlspecialchars($row['PlantName']); ?>',
    '<?php echo htmlspecialchars($row['PlantType']); ?>',
    '<?php echo htmlspecialchars($row['PlantDesc']); ?>',
    '<?php echo htmlspecialchars($row['WaterCapacity']); ?>',
    '<?php echo htmlspecialchars($row['SoilType']); ?>',
    '<?php echo htmlspecialchars($row['DaystoHarvest']); ?>'
    
)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editPlantModal">Edit</a>
 <button onclick="deleteRecord(<?= $row['id'] ?>)" class="btn btn-danger btn-sm">Delete</button>
</td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
                                </tbody>
                            </table>
                            <button onclick="openModal()" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; border-radius: 5px; float: right;">Add Plant</button>
                        </div>
                        <!-- Modal for adding plant -->
<div id="myModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4); text-align: center;">
    <!-- Modal content for adding plant -->
    <div class="modal-content" style="background-color: #fefefe; padding: 20px; border: 1px solid #888; border-radius: 10px; width: 50%; margin: 15% auto;">
        <span class="close" style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="closeModal()">&times;</span>
        <h2>Add Plant</h2>
        <form id="addPlantForm" action="<?php echo base_url('plants/insertPlant'); ?>" method="post">
            <label for="PlantName">Plant Name:</label><br>
            <input type="text" id="PlantName" name="PlantName" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
            <label for="PlantType">Plant Type:</label><br>
            <input type="text" id="PlantType" name="PlantType" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
            <label for="PlantDesc">Plant Description:</label><br>
            <input type="text" id="PlantDesc" name="PlantDesc" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
            <label for="WaterCapacity">Water Capacity:</label><br>
            <input type="text" id="WaterCapacity" name="WaterCapacity" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
            <label for="SoilType">Soil Type:</label><br>
            <input type="text" id="SoilType" name="SoilType" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
            <label for="DaystoHarvest">Days to Harvest:</label><br>
            <input type="text" id="DaystoHarvest" name="DaystoHarvest" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
            <label for="HarvestStatus">Harvest Status:</label><br>
            <input type="text" id="HarvestStatus" name="HarvestStatus" required style="width: 80%; padding: 10px; margin-bottom: 10px;"><br>
            <button type="submit" style="background-color: #4CAF50; color: white; border: none; border-radius: 5px; padding: 10px 20px; cursor: pointer;">Submit</button>
        </form>
    </div>
</div>
                        <!-- Modal for displaying plant information -->
                        <div id="plantInfoModal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4); text-align: center;">
                            <!-- Modal content for displaying plant information -->
                            <div class="modal-content" style="background-color: #fefefe; padding: 20px; border: 1px solid #888; border-radius: 10px; width: 50%; margin: 15% auto;">
                                <span class="close" style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="closePlantModal()">&times;</span>
                                <h2>Plant Information</h2>
                                <div id="plantInfo"></div>
                            </div>
                        </div>
<!-- edit plants modal  -->
<!-- Modal -->
<div class="modal fade" id="editPlantModal" tabindex="-1" role="dialog" aria-labelledby="editPlantModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPlantModalLabel">Edit Plant Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
    <form id="editPlantForm" action="<?php echo base_url('plants/update'); ?>" method="post">
        <!-- Hidden input field for plant ID -->
        <input type="hidden" id="plantIdInput" name="plantId">
        <div class="form-group">
            <label for="plantNameInput">Plant Name</label>
            <input type="text" class="form-control" id="plantNameInput" name="plantName">
        </div>
        <div class="form-group">
            <label for="plantTypeInput">Plant Type</label>
            <input type="text" class="form-control" id="plantTypeInput" name="plantType">
        </div>
        <div class="form-group">
            <label for="plantDescInput">Plant Description</label>
            <input type="text" class="form-control" id="plantDescInput" name="plantDesc">
        </div>
        <div class="form-group">
            <label for="waterCapacityInput">Water Capacity</label>
            <input type="text" class="form-control" id="waterCapacityInput" name="waterCapacity">
        </div>
        <div class="form-group">
            <label for="soilTypeInput">Soil Type</label>
            <input type="text" class="form-control" id="soilTypeInput" name="soilType">
        </div>
        <div class="form-group">
            <label for="daysToHarvestInput">Days to Harvest</label>
            <input type="text" class="form-control" id="daysToHarvestInput" name="daysToHarvest">
        </div>
        <!-- Additional fields can be added here -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

        </div>
    </div>
</div>

<!-- edit plants modal end  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }
    function deleteRecord(id) {
    if (confirm('Are you sure you want to delete this record?')) {
        window.location.href = '<?= base_url('tables/delete/') ?>' + id;
    }
}

    function openPlantModal(plantName, plantType, plantDesc, waterCapacity, soilType, daysToHarvest,harvestStatus, imageUrl) {
    var plantInfoHTML = `
        <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <div style="flex: 1;">
                <p><strong>Plant Name:</strong> ${plantName}</p>
                <p><strong>Plant Type:</strong> ${plantType}</p>
                <p><strong>Plant Description:</strong> ${plantDesc}</p>
                <p><strong>Water Capacity:</strong> ${waterCapacity}</p>
                <p><strong>Soil Type:</strong> ${soilType}</p>
                <p><strong>Days to Harvest:</strong> ${daysToHarvest}</p>
                <p><strong>Harvest Status:</strong> ${harvestStatus}</p>
            </div>
            <div style="flex: 1;">
                <img src="${imageUrl}" style="max-width: 100%; height: auto;">
                <img src="admin/theme-assets/images/carousel/images(3).jpg" style="max-width: 100%; height: auto;">
            </div>
        </div>
    `;
    document.getElementById("plantInfo").innerHTML = plantInfoHTML;
    document.getElementById("plantInfoModal").style.display = "block";
}
// JavaScript
function updateEditForm(plantName, plantType, plantDesc, waterCapacity, soilType, daysToHarvest, harvestStatus) {
    document.getElementById('plantNameInput').value = plantName;
    document.getElementById('plantTypeInput').value = plantType;
    document.getElementById('plantDescInput').value = plantDesc;
    document.getElementById('waterCapacityInput').value = waterCapacity;
    document.getElementById('soilTypeInput').value = soilType;
    document.getElementById('daysToHarvestInput').value = daysToHarvest;
    document.getElementById('harvestStatusInput').value = harvestStatus;
}

$(document).ready(function() {
    $('#editPlantForm').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        // Submit the form using AJAX
        $.ajax({
            url: $(this).attr('action'), // Form action URL
            type: $(this).attr('method'), // Form submission method
            data: $(this).serialize(), // Form data
            success: function(response) {
                console.log(response);
                $('#editPlantModal').modal('hide'); // Close modal after successful submission
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});

function closePlantModal() {
    document.getElementById("plantInfoModal").style.display = "none";
}


   // JavaScript for handling form submission using AJAX
document.getElementById("addPlantForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting via the browser
    var formData = new FormData(this); // Get form data
    var xhr = new XMLHttpRequest(); // Create new XMLHttpRequest object

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Success: Do something with the response
                console.log(xhr.responseText);
                closeModal(); // Close the modal after successful submission
                showMessage("Plants Successfully Inserted");
            } else {
                // Error: Handle error
                console.error(xhr.statusText);
                showMessage("Failed to insert plants");
            }
        }
    };

    xhr.open("POST", this.action, true); // Open connection
    xhr.send(formData); // Send form data
});

function showMessage(message) {
    // Display the message to the user
    alert(message); // Display message in an alert box (you can replace this with your preferred UI method)
}

function closeModal() {
    // Close the modal
    var modal = document.getElementById("myModal"); // Assuming your modal has the ID "myModal"
    modal.style.display = "none"; // Hide the modal
}

// harvest status of plants
function updateHarvestStatus(plantId) {
        // Update UI to show "harvested"
        const harvestStatusElement = document.getElementById(`harvestStatus${plantId}`);
        harvestStatusElement.textContent = 'harvested';

        // Send a POST request to update the harvest status
        fetch(`/plants/${plantId}/updateHarvestStatus`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '<?= csrf_token() ?>' // Assuming you have CSRF protection enabled
            },
            body: JSON.stringify({ plantId: plantId })
        })
        .then(response => {
            if (response.ok) {
                // Handle success
                console.log('Harvest status updated successfully');
            } else {
                // Handle error
                console.error('Failed to update harvest status');
                // Revert UI to previous state on error
                harvestStatusElement.textContent = 'not yet';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Revert UI to previous state on error
            harvestStatusElement.textContent = 'not yet';
        });
    }
</script>
</div>

<!-- Basic Tables end -->
<!-- Striped rows start -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">List of Harvested Plants</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
				<div class="card-body">
					<p class="card-text">Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>. This styling doesn't work in IE8 and below as <code>:nth-child</code> CSS selector isn't supported.</p>
				</div>
				<div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Plant Name</th>
                                        <th>Plant Type</th>
                                        <th>Plant Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if($plants): ?>
        <?php foreach($plants as $row) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><a href="#" onclick="openPlantModal('<?php echo $row['PlantName']; ?>', '<?php echo $row['PlantType']; ?>', '<?php echo $row['PlantDesc']; ?>', '<?php echo $row['WaterCapacity']; ?>', '<?php echo $row['SoilType']; ?>', '<?php echo $row['DaystoHarvest']; ?>')"><?php echo $row['PlantName']; ?></a></td>
                <td><?php echo $row['PlantType']; ?></td>
                <td><?php echo $row['HarvestStatus']; ?></td>
                <td>
</td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
                                </tbody>
                            </table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Striped rows end -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="admin/theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="admin/theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="admin/theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>