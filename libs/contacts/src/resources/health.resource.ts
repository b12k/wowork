import { z } from 'zod';
import { HealthEntity } from '../entities';

export const GetHealthRequest = HealthEntity;
export type TGetHealthRequest = z.infer<typeof GetHealthRequest>;
