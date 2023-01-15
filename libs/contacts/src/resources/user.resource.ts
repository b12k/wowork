import {number, z} from 'zod';

import { UserEntity } from '../entities';

export const GetUserResponse = UserEntity;
export type TGetUserResponse = z.infer<typeof GetUserResponse>;

export const GetUserCollectionResponse = z.object({
  users: z.array(UserEntity),
  skip: z.number(),
  take: z.number(),
  total: z.number(),
})
export type TGetUserCollectionResponse = z.infer<typeof GetUserCollectionResponse>

export const GetUserCollectionRequest = z.object({
  take: number().min(1).max(100),
  skip: number().min(0),
})
export type TGetUserCollectionRequest = z.infer<typeof GetUserCollectionRequest>;
