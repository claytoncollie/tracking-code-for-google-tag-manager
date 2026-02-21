describe("Set tracking ID with PHP filter", () => {
  before(() => {
    cy.login();
    cy.activatePlugin("filter");
  });

  it("Is input field disabled?", () => {
    cy.visit("/wp-admin/options-general.php");
    cy.get("#tracking_code_for_google_tag_manager").should("be.disabled");
  });

  it("Does input field contain the filtered value?", () => {
    cy.visit("/wp-admin/options-general.php");
    cy.get("#tracking_code_for_google_tag_manager")
      .invoke("val")
      .should("eq", "filter");
  });

  it("Is tracking code printed to the head?", () => {
    cy.logout();
    cy.visit("/");
    cy.document().then((doc) => {
      const html = doc.documentElement.innerHTML;
      expect(html).to.contain("googletagmanager.com/gtm.js?id=filter");
    });
  });

  after(() => {
    cy.login();
    cy.deactivatePlugin("filter");
  });
});
