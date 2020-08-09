<?php
/**
 * Приводит значение переменной к строке.
 */
function var_to_str($var) {
  return filter_var($var, FILTER_SANITIZE_STRING);
}

/**
 * Приводит значение переменной к целому числу.
 */
function var_to_number($var) {
  return filter_var($var, FILTER_SANITIZE_NUMBER_INT);
}