<?php
/**
 * @package Kount_Log
 * @subpackage Binding
 */

/**
 * Implementation of a No OPeration logger. Just silently discards logging.
 * @package Kount_Log
 * @subpackage Binding
 * @author Kount <custserv@kount.com>
 * @version $Id: NopLogger.php 22638 2013-02-21 18:14:08Z bpd $
 * @copyright 2012 Kount, Inc. All Rights Reserved.
 */
class Kount_Log_Binding_NopLogger implements Kount_Log_Binding_Logger {

  /**
   * Constructor for Nop logger.
   * @param string $name Logger name
   */
  public function __construct ($name) {
    //Just accept a logger name and do nothing with it.
  }

  /**
   * Discard a debug level message.
   * @param string $message Message to log
   * @param Exception $exception Exception to log
   * @return void
   */
  public function debug ($message, $exception = null) {
  }

  /**
   * Discard an info level message.
   * @param string $message Message to log
   * @param Exception $exception Exception to log
   * @return void
   */
  public function info ($message, $exception = null) {
  }

  /**
   * Discard a warn level message.
   * @param string $message Message to log
   * @param Exception $exception Exception to log
   * @return void
   */
  public function warn ($message, $exception = null) {
  }

  /**
   * Discard an error level message.
   * @param string $message Message to log
   * @param Exception $exception Exception to log
   * @return void
   */
  public function error ($message, $exception = null) {
  }

  /**
   * Discard a fatal level message.
   * @param string $message Message to log
   * @param Exception $exception Exception to log
   * @return void
   */
  public function fatal ($message, $exception = null) {
  }

} // end Kount_Log_Binding_NopLogger
