import "@10up/cypress-wp-utils";

// Override wpCli to work with wp-env 10.x which no longer auto-prefixes "wp"
Cypress.Commands.overwrite("wpCli", (originalFn, command, options = {}) => {
  return cy.exec(`npx wp-env run tests-cli -- wp ${command}`, options);
});

// Ignore uncaught exceptions from WordPress admin JS (e.g. user-profile.min.js)
Cypress.on("uncaught:exception", () => false);

// Restore login session before each test (replaces deprecated Cypress.Cookies.defaults
// which does not work with experimentalSessionAndOrigin)
beforeEach(() => {
  cy.login();
});
