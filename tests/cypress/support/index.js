import "@10up/cypress-wp-utils";

beforeEach(() => {
  Cypress.Cookies.defaults({
    preserve: /^wordpress.*?/,
  });
});
