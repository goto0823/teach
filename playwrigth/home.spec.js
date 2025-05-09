// @ts-check
import { test, expect } from '@playwright/test';
import { beforeEach } from 'node:test';

test.beforeEach(async ({ page }) => {
  await page.goto('/');
})

test('has nav', async ({ page }) => {
  
  await page.waitForLoadState('networkidle', { timeout: 5000 });

  await page.screenshot({ path: 'start-of-test.png', fullPage: true });

  await expect(page.getByLabel('header-nav')).toHaveText('料理一覧 材料一覧 注文をする');
});

