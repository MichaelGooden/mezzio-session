# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 1.5.0 - TBD

### Added

- Nothing.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.4.1 - 2020-10-08

-----

### Release Notes for [1.4.1](https://github.com/mezzio/mezzio-session/milestone/2)

1.4.x bugfix release (patch)

- Total issues resolved: **0**
- Total pull requests resolved: **1**
- Total contributors: **1**

#### Enhancement

 - [15: 1.4.x code updates](https://github.com/mezzio/mezzio-session/pull/15) thanks to @pine3ree

## 1.4.0 - 2020-10-07

### Added

- [#13](https://github.com/mezzio/mezzio-session/pull/13) adds support for PHP 7.4 and 8.0.

### Removed

- [#13](https://github.com/mezzio/mezzio-session/pull/13) removes support for dflydev/fig-cookies versions prior to 2.0.1.

- [#13](https://github.com/mezzio/mezzio-session/pull/13) removes support for PHP versions prior to 7.3.


-----

### Release Notes for [1.4.0](https://github.com/mezzio/mezzio-session/milestone/1)



### 1.4.0

- Total issues resolved: **2**
- Total pull requests resolved: **4**
- Total contributors: **3**

#### Enhancement

 - [14: Add Psalm integration](https://github.com/mezzio/mezzio-session/pull/14) thanks to @weierophinney and @boesing
 - [13: Add PHP 8 support](https://github.com/mezzio/mezzio-session/pull/13) thanks to @weierophinney and @boesing
 - [10: 1.4.x persistence traits addon](https://github.com/mezzio/mezzio-session/pull/10) thanks to @pine3ree
 - [5: Add extra SessionInterface::class request attribute](https://github.com/mezzio/mezzio-session/pull/5) thanks to @pine3ree

## 1.3.0 - 2019-10-16

### Added

- [#5](https://github.com/mezzio/mezzio-session/pull/5) adds the ability to use pull the session instance using the request attribute `Mezzio\Session\SessionInterface::class` (in addition to `Mezzio\Sesson\SessionMiddleware::SESSION_ATTRIBUTE` or `session`). This makes usage more consistent with other Mezzio packages, where interface or class names are used for request attributes. The original values will be kept, as they allow substituting other session implementations.

- [#10](https://github.com/mezzio/mezzio-session/pull/10) adds a new property and method to the `Mezzion\Session\Persistence\SessionCookieAwareTrait`, `private $deleteCookieOnEmptySession = false`, and `public function isDeleteCookieOnEmptySession(): bool`; implementations that want to enforce deleting the session cookie when the session is empty can toggle the property flag to make this behavior occur.

- [zendframework/zend-expressive-session#38](https://github.com/zendframework/zend-expressive-session/pull/38) adds `InitializeSessionIdInterface` and `InitializePersistenceIdInterface`. These add `initializeId()` methods to session and persistence, allowing developers to access new or regenerated session IDs before the session is persisted.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.2.1 - 2019-03-05

### Added

- [zendframework/zend-expressive-session#33](https://github.com/zendframework/zend-expressive-session/pull/33) adds support for PHP 7.3.

### Changed

- [zendframework/zend-expressive-session#34](https://github.com/zendframework/zend-expressive-session/pull/34) provides several performance optimizations in `Mezzios\Session\LazySession`.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.2.0 - 2018-10-30

### Added

- [zendframework/zend-expressive-session#28](https://github.com/zendframework/zend-expressive-session/pull/28) adds a new interface, `SessionCookiePersistenceInterface`, defining:
  - the constant `SESSION_LIFETIME_KEY`
  - the method `persistSessionFor(int $duration) : void`, for developers to hint
    to the persistence engine how long a session should last
  - the method `getSessionLifetime() : int`, for persistence engines to
    determine if a specific session duration was requested

### Changed

- [zendframework/zend-expressive-session#28](https://github.com/zendframework/zend-expressive-session/pull/28) updates both `Session` and `LazySession` to implement the new
  `SessionCookiePersistenceInterface.  If a `SessionCookiePersistenceInterface::SESSION_LIFETIME_KEY`
  is present in the initial session data provided to a `Session` instance, this
  value will be used to indicate the requested session duration; otherwise, zero
  is used, indicating the session should end when the browser is closed.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.1.0 - 2018-09-12

### Added

- [zendframework/zend-expressive-session#27](https://github.com/zendframework/zend-expressive-session/pull/27) adds a new interface, `Mezzio\Session\SessionIdentifierAwareInterface`.
  `SessionInterface` implementations should also implement this interface, and
  persistence implementations should only create and consume session
  implementations that implement it. The interface defines a single method,
  `getId()`, representing the identifier of a discovered session. This allows
  the identifier to be associated with its session data, ensuring that when
  concurrent requests are made, persistence operates on the correct identifier.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.0.0 - 2018-03-15

### Added

- [zendframework/zend-expressive-session#18](https://github.com/zendframework/zend-expressive-session/pull/18) adds
  support for PSR-15 middleware.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- [zendframework/zend-expressive-session#14](https://github.com/zendframework/zend-expressive-session/pull/14) and
  [zendframework/zend-expressive-session#18](https://github.com/zendframework/zend-expressive-session/pull/18) remove
  support for http-interop/http-middleware and http-interop/http-server-middleware.

- [zendframework/zend-expressive-session#5](https://github.com/zendframework/zend-expressive-session/pull/5) removes
  the method `LazySession::segment()`. This method was a remnant from a previous
  refactor, and not intended for the final API. Considering that `Session` does
  not implement the method, calling it would lead to a fatal error anyways.

### Fixed

- Nothing.

## 0.1.0 - 2017-10-10

Initial release.

### Added

- Everything.

### Changed

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.
