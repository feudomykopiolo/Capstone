<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('service', 'Home::service');
$routes->get('project', 'Home::project');
$routes->get('contact', 'Home::contact');
$routes->get('feature', 'Home::feature');
$routes->get('quote', 'Home::quote');
$routes->get('team', 'Home::team');
$routes->get('testimonial', 'Home::testimonial');
$routes->get('404', 'Home::error');

$routes->get('register', 'UserController::registration');
$routes->get('login', 'UserController::login');

$routes->post('register', 'UserController::register');


// admin side
$routes->get('dash', 'AdminController::dash');
$routes->get('charts', 'AdminController::charts');
$routes->get('tables', 'AdminController::tables');
$routes->get('cards', 'AdminController::cards');
$routes->get('sensors', 'AdminController::sensors');
$routes->get('nutrients', 'AdminController::nutrients');
$routes->get('alerts', 'AdminController::alerts');

// Plots
$routes->get('GHPlot1', 'PlotController::GHPlot1');
$routes->get('GHPlot2', 'PlotController::GHPlot2');
$routes->get('GHPlot3', 'PlotController::GHPlot3');
$routes->get('GHPlot4', 'PlotController::GHPlot4');
$routes->get('GHPlot5', 'PlotController::GHPlot5');
$routes->get('GHPlot6', 'PlotController::GHPlot6');
$routes->get('GHPlot7', 'PlotController::GHPlot7');
$routes->get('GHPlot8', 'PlotController::GHPlot8');
// Plot end

// Plant nutrients
$routes->get('PlantNuts1', 'NutrientsController::PlantNuts1');
$routes->get('PlantNuts2', 'NutrientsController::PlantNuts2');
$routes->get('PlantNuts3', 'NutrientsController::PlantNuts3');
$routes->get('PlantNuts4', 'NutrientsController::PlantNuts4');
$routes->get('PlantNuts5', 'NutrientsController::PlantNuts5');
$routes->get('PlantNuts6', 'NutrientsController::PlantNuts6');
$routes->get('PlantNuts7', 'NutrientsController::PlantNuts7');
$routes->get('PlantNuts8', 'NutrientsController::PlantNuts8');
// plant nutrients end

$routes->post('plants/insertPlant', 'PlantController::insertPlant');
$routes->get('list', 'PlantController::list');
// $routes->get('plants/sort', 'PlantController::sortPlantsByType');
$routes->get('/fetch-plant-type-and-sort', [PlantController::class, 'fetchPlantTypeAndSort']);


// CRUD
$routes->get('tables/delete/(:num)', 'PlantController::delete/$1');
$routes->get('plants/edit/(:num)', 'PlantController::edit/$1');
$routes->post('plants/update/(:num)', 'PlantController::update/$1');
$routes->post('plants/(:num)/updateHarvestStatus', 'PlantController::updateHarvestStatus/$1');
 