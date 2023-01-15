import { z } from 'zod';

export const HealthEntity = z.object({
  status: z.enum(['good', 'bad'])
});

export type THealthEntity = z.infer<typeof HealthEntity>;
