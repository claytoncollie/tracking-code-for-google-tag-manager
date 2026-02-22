describe("Set tracking ID with wp-config definition", () => {
  before(() => {
    cy.login();
    cy.activatePlugin("definition");
  });

  it("Is input field disabled?", () => {
    cy.visit("/wp-admin/options-general.php");
    cy.get("#tracking_code_for_google_tag_manager").should("be.disabled");
  });

  it("Does input field contain the defined value?", () => {
    cy.visit("/wp-admin/options-general.php");
    cy.get("#tracking_code_for_google_tag_manager")
      .invoke("val")
      .should("eq", "definition");
  });

  it("Is tracking code printed to the head?", () => {
    cy.logout();
    cy.visit("/");
    cy.document().then((doc) => {
      const html = doc.documentElement.innerHTML;
      expect(html).to.contain("googletagmanager.com/gtm.js?id=definition");
    });
  });

  after(() => {
    cy.login();
    cy.deactivatePlugin("definition");
  });
});
