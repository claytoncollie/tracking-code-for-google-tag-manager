import "@10up/cypress-wp-utils";

// Override wpCli to work with wp-env 10.x which no longer auto-prefixes "wp"
Cypress.Commands.overwrite("wpCli", (originalFn, command, options = {}) => {
  return cy.exec(`npx wp-env run tests-cli -- wp ${command}`, options);
});

beforeEach(() => {
  Cypress.Cookies.defaults({
    preserve: /^wordpress.*?/,
  });
});
