import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/');
  await page.getByText('Vouchers 100 THB').first().click();
  await page.getByRole('button', { name: ' Add to cart' }).click();
  await page.getByRole('link', { name: ' Proceed to checkout' }).click();
  await page.getByRole('button', { name: 'Process with invoice' }).click();
  await page.getByLabel('Mr.').check();
  await page.getByLabel('First name').click();
  await page.getByLabel('First name').fill('Somchi');
  await page.getByLabel('Last name').click();
  await page.getByLabel('Last name').fill('Jaidee');
  await page.getByLabel('Email').click();
  await page.getByLabel('Email').fill('somchi.n@test.com');
  await page.getByRole('button', { name: 'Continue' }).click();
  await page.getByLabel('City').click();
  await page.getByLabel('City').fill('บึงกาฬ');
  await page.getByLabel('Zip/Postal Code').click();
  await page.getByLabel('Zip/Postal Code').fill('38000');
  await page.getByLabel('Address', { exact: true }).click();
  await page.getByLabel('Address', { exact: true }).fill('123/3 ซ.5 บ.นาเจริญ ต.หนองเลิง อ.เมืองบึงกาฬ');
  await page.getByLabel('Phone').click();
  await page.getByLabel('Phone').fill('098-333-3333');
  await page.getByRole('button', { name: 'Continue' }).click();
});