// @ts-check
import { test, expect } from '@playwright/test';
import { beforeEach } from 'node:test';

test.beforeEach(async ({ page }) => {
  await page.goto('http://laravel-teach.local');
})

test('has nav', async ({ page }) => {

  await expect(page.getByLabel('header-nav')).toHaveText('料理一覧 材料一覧 注文をする');
});

