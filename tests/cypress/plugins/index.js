const { readConfig } = require("@wordpress/env/lib/config");

module.exports = async (on, config) => {
  wpEnvConfig = await readConfig("wp-env");

  if (wpEnvConfig) {
    const port = wpEnvConfig.env.tests.port || null;

    if (port) {
      config.baseUrl = wpEnvConfig.env.tests.config.WP_TESTS_DOMAIN;
    }
  }

  return config;
};
